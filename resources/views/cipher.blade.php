<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vernam Cipher App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Vernam Cipher Tool</h1>
        <form action="{{ url('/encrypt') }}" method="POST">
            @csrf
            <div>
                <label for="plaintext">Plaintext:</label>
                <input type="text" id="plaintext" name="plaintext" required>
            </div>
            <button type="submit">Encrypt</button>
        </form>
        
        <form action="{{ url('/decrypt') }}" method="POST">
            @csrf
            <div>
                <label for="ciphertext">Ciphertext:</label>
                <input type="text" id="ciphertext" name="ciphertext" required>
            </div>
            <div>
                <label for="key">Key:</label>
                <input type="text" id="key" name="key" required>
            </div>
            <button type="submit">
