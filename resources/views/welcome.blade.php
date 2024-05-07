<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia XOR</title>
    <link rel="icon" type="image/png" href="onetimepad.png" />
    <link rel="stylesheet" href="{{ asset('css/cipher.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bem Vindo, a criptografia de XOR.</h1>
        <p class = "options-selection">Selecione uma opção:</p> 
        <div class="button-container">
        <a href="{{ url('/cipher') }}" class="btn btn-primary">Criptografar ou Descriptar</a>
        </div>
    </div>
</body>
</html>
