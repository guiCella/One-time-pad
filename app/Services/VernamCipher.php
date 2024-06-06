<?php

namespace App\Services;

class VernamCipher
{
    // Ajusta o tamanho da chave para o tamanho do texto de entrada
    private function adjustKeyLength($key, $length)
    {
        while (strlen($key) < $length) {
            $key .= $key;
        }
        return substr($key, 0, $length);
    }

    // Procesa o texto de entrada com a chave
    private function processText($input, $key)
    {

        $key = $this->adjustKeyLength($key, strlen($input));

        // Converte o texto de entrada e a chave em arrays de caracteres

        $inputArr = str_split($input);
        $keyArr = str_split($key);

        // XOR cada caractere do texto de entrada com o caractere correspondente da chave

        $resultArr = array_map(function ($inputChar, $keyChar) {
            return $inputChar ^ $keyChar;
        }, $inputArr, $keyArr);

        // Converte o array de caracteres resultante em uma string

        return implode('', $resultArr);
    }

    // Encripta o texto de entrada usando a chave
    public function encrypt($plaintext, $key)
    {
        return $this->processText($plaintext, $key);
    }

    // Decripta o texto de entrada usando a chave
    public function decrypt($ciphertext, $key)
    {
        return $this->processText($ciphertext, $key);
    }
}
