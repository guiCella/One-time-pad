<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VernamCipher;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use TCPDF;

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

    $key = str_pad($key, strlen($contents), $key, STR_PAD_RIGHT);

    $encryptedContents = $this->cipher->encrypt($contents, $key);

    $originalFileName = $file->getClientOriginalName();
    $filePath = storage_path('app/' . $originalFileName);

    Storage::disk('local')->put($originalFileName, $encryptedContents);

    return response()->download($filePath, $originalFileName, ['Content-Type' => 'text/plain'])->deleteFileAfterSend(true);
}

    public function showForm()
    {
        return view('cipher');
    }
}
