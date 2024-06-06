<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VernamCipher;
use Illuminate\Support\Facades\Storage;


class VernamCipherController extends Controller
{
    // Injeta a instância do serviço VernamCipher
    protected $cipher;

    // Construtor

    public function __construct(VernamCipher $cipher)
    {
        $this->cipher = $cipher;
    }

    // Encripta um texto de entrada com uma chave

    public function encryptFile(Request $request)
    {

        // Valida os dados de entrada

        $request->validate([
            'file' => 'required|file',
            'key' => 'required|string'
        ]);

        // Obtém o arquivo de entrada e a chave

        $file = $request->file('file');
        $key = $request->input('key');
        $contents = file_get_contents($file->getRealPath());

        // Ajusta o tamanho da chave para o tamanho do texto de entrada

        $key = str_pad($key, strlen($contents), $key, STR_PAD_RIGHT);

        // Encripta o texto de entrada com a chave

        $encryptedContents = $this->cipher->encrypt($contents, $key);

        // Salva o texto encriptado em um arquivo temporário

        $originalFileName = $file->getClientOriginalName();

        $filePath = storage_path('app/' . $originalFileName);

        Storage::disk('local')->put($originalFileName, $encryptedContents);

        return response()->download($filePath, $originalFileName, ['Content-Type' => 'text/plain'])->deleteFileAfterSend(true);
    }

    public function showForm()
    {
        return view('cipher');
    }
    public function showDaisy()
    {
        return view('daisy');
    }
}
