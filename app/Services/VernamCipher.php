<?php

namespace App\Services;

class VernamCipher
{
    public function generateKey($length) {
        $key = '';
        for ($i = 0; $i < $length; $i++) {
            $key .= chr(mt_rand(0, 255)); // Generate a random byte
        }
        return $key;
    }

    public function encrypt($plaintext, $key) {
        $ciphertext = '';
        $length = strlen($plaintext);
        for ($i = 0; $i < $length; $i++) {
            $ciphertext .= $plaintext[$i] ^ $key[$i]; // XOR each byte
        }
        return $ciphertext;
    }

    public function decrypt($ciphertext, $key) {
        $decryptedText = '';
        $length = strlen($ciphertext);
        for ($i = 0; $i < $length; $i++) {
            $decryptedText .= $ciphertext[$i] ^ $key[$i]; // XOR each byte
        }
        return $decryptedText;
    }
}
