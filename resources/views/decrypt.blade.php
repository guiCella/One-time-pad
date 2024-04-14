<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrypt File</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        label, input, button { display: block; width: 100%; margin-top: 10px; }
        input, button { padding: 10px; margin-top: 5px; }
        button { background-color: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
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
