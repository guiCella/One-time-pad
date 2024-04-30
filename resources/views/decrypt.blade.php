<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrypt File</title>
    <link rel="stylesheet" href="{{ asset('css/decrypt.css') }}">
</head>
<body>
    <div class="container">
        <h1>Decrypt File</h1>
        <a href="{{ url('/') }}">Go Back</a>
        <form action="{{ url('/decrypt-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="key">Decryption Key:</label>
                <input type="text" id="key" name="key" required>
            </div>
            <div>
                <label for="file">Select an encrypted file:</label>
                <input type="file" id="file" name="file" required>
            </div>
            <button type="submit">Decrypt and Download</button>
        </form>
    </div>
</body>
</html>
