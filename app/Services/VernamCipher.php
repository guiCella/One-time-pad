<?php

namespace App\Services;

class VernamCipher
{
    public function encrypt($plaintext, $key) {
        $key = $this->adjustKeyLength($key, strlen($plaintext));
        $ciphertext = '';
        for ($i = 0; $i < strlen($plaintext); $i++) {
            $ciphertext .= $plaintext[$i] ^ $key[$i]; // XOR each byte
        }
        return $ciphertext;
    }

    public function decrypt($ciphertext, $key) {
        $key = $this->adjustKeyLength($key, strlen($ciphertext));
        $decryptedText = '';
        for ($i = 0; $i < strlen($ciphertext); $i++) {
            $decryptedText .= $ciphertext[$i] ^ $key[$i]; // XOR each byte
        }
        return $decryptedText;
    }

    // Utility function to adjust the key length
    private function adjustKeyLength($key, $length) {
        while (strlen($key) < $length) {
            $key .= $key;
        }
        return substr($key, 0, $length); // Ensure key is not longer than needed
    }
}
