<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VernamCipher;
use Illuminate\Support\Facades\Storage;

class VernamCipherController extends Controller
{
    protected $cipher;

    public function __construct(VernamCipher $cipher)
    {
        $this->cipher = $cipher;
    }

    public function encryptFile(Request $request)
{
    $request->validate([
        'file' => 'required|file',
        'key' => 'required|string'
    ]);

    $file = $request->file('file');
    $key = $request->input('key');
    $contents = file_get_contents($file->getRealPath());

    // Pad the key to ensure it matches the contents length, or cut it if it's too long
    $key = str_pad($key, strlen($contents), $key, STR_PAD_RIGHT);
    
    // Encrypt the contents
    $encryptedContents = $this->cipher->encrypt($contents, $key);

    // Prepare a .txt filename, ensuring it's unique to avoid conflicts
    $encryptedFileName = 'encrypted_' . time() . '.txt';
    $filePath = storage_path('app/' . $encryptedFileName);

    // Save the encrypted content to a .txt file
    Storage::disk('local')->put($encryptedFileName, $encryptedContents);

    // Return the .txt file as a download
    return response()->download($filePath, $encryptedFileName, ['Content-Type' => 'text/plain'])->deleteFileAfterSend(true);
}

public function decryptFile(Request $request)
{
    $request->validate([
        'file' => 'required|file',
        'key' => 'required|string'
    ]);

    $file = $request->file('file');
    $key = $request->input('key');
    $contents = file_get_contents($file->getRealPath());

    // Extend or repeat the key to match the length of the contents
    $key = (strlen($key) < strlen($contents)) ? str_pad($key, strlen($contents), $key, STR_PAD_RIGHT) : $key;

    $decryptedContents = $this->cipher->decrypt($contents, $key);

    // Prepare a .txt filename to download
    $decryptedFileName = 'decrypted_' . time() . '.txt';
    $filePath = storage_path('app/' . $decryptedFileName);

    Storage::disk('local')->put($decryptedFileName, $decryptedContents);

    return response()->download($filePath, $decryptedFileName, ['Content-Type' => 'text/plain'])->deleteFileAfterSend(true);
}


    public function showForm()
{
    return view('cipher');
}
public function showDecryptForm()
{
    return view('decrypt');
}

}
