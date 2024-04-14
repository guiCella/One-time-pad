<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VernamCipher;

class VernamCipherController extends Controller
{
    protected $cipher;

    public function __construct(VernamCipher $cipher)
    {
        $this->cipher = $cipher;
    }

    public function encrypt(Request $request)
    {
        $plaintext = $request->input('plaintext');
        $key = $this->cipher->generateKey(strlen($plaintext));
        $ciphertext = $this->cipher->encrypt($plaintext, $key);

        return response()->json([
            'plaintext' => $plaintext,
            'key' => bin2hex($key),
            'ciphertext' => bin2hex($ciphertext)
        ]);
    }

    public function decrypt(Request $request)
    {
        $ciphertext = hex2bin($request->input('ciphertext'));
        $key = hex2bin($request->input('key'));
        $decryptedText = $this->cipher->decrypt($ciphertext, $key);

        return response()->json([
            'ciphertext' => bin2hex($ciphertext),
            'key' => bin2hex($key),
            'decryptedText' => $decryptedText
        ]);
    }
    public function showForm()
{
    return view('cipher');
}

}
