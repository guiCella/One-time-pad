<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One time pad</title>
    <link rel="stylesheet" href="{{ asset('css/cipher.css') }}">
</head>

<body>
    <div class="container">
        <a href="{{ url('/') }}" class="back-button">&larr;</a>
        <h1>Encriptar Arquivo</h1>
        <form action="{{ url('/encrypt-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="key">Chave de criptografia:</label>
                <input type="text" id="key" name="key" required placeholder="Chave segura...">
            </div>
            <div class="form-group">
                <div class="file-upload-wrapper">
                    <button type="button" class="file-upload-button">Escolha um arquivo</button>
                    <input type="file" class="file-upload-input" id="file-upload">
                    <span id="file-name">Nenhum arquivo selecionado...</span>
                </div>
            </div>
            <button type="submit">Criptografar e Baixar</button>
        </form>
    </div>
    <script>document.getElementById('file-upload').addEventListener('change', function(e) {
    var fileName = e.target.files.length > 0 ? e.target.files[0].name : 'Nenhum arquivo selecionado...';
    document.getElementById('file-name').textContent = fileName;
});
</script>
</body>

</html>
