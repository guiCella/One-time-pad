<?php

namespace App\Services;

class VernamCipher
{
    // Utility function to adjust the key length
    private function adjustKeyLength($key, $length) {
        while (strlen($key) < $length) {
            $key .= $key;
        }
        return substr($key, 0, $length); 
    }

    // Process the input text using the key
    private function processText($input, $key) {
        if (empty($input) || empty($key)) {
            throw new \InvalidArgumentException('Input text and key cannot be empty');
        }

        $key = $this->adjustKeyLength($key, strlen($input));
        $inputArr = str_split($input);
        $keyArr = str_split($key);

        $resultArr = array_map(function($inputChar, $keyChar) {
            return $inputChar ^ $keyChar;
        }, $inputArr, $keyArr);

        return implode('', $resultArr);
    }

    // Encrypt the plaintext using the key
    public function encrypt($plaintext, $key) {
        return $this->processText($plaintext, $key);
    }

    // Decrypt the ciphertext using the key
    public function decrypt($ciphertext, $key) {
        return $this->processText($ciphertext, $key);
    }
}
