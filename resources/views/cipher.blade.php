<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site para criptografia de documentos</title>
    <link rel="icon" type="image/png" href="onetimepad.png" />
    <link rel="stylesheet" href="{{ asset('css/cipher.css') }}">
</head>

<body>
    <div class="container">
        <a href="{{ url('/') }}" class="back-button">&larr;</a>
        <h1>Criptografia One-Time Pad</h1>
        <form action="{{ url('/encrypt-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="key">Chave de criptografia:</label>
                <input type="text" id="key" name="key" placeholder="Chave segura...">
            </div>
            <div class="form-group">
                <div class="file-upload-wrapper">
                    <button type="button" class="file-upload-button">Escolha um arquivo</button>
                    <input type="file" class="file-upload-input" id="file-upload" name="file"  accept=".txt">
                    <span id="file-name">Nenhum arquivo selecionado...</span>
                </div>
            </div>
            <div class="form-group">
            <button type="submit">Encriptar ou Descriptar</button>
            </div>
        </form>
    </div>
    <div id="notification-container" class="noty_layout" style="display: none;">
        <div class="noty_bar noty_type__error noty_theme__bootstrap-v4 noty_close_with_click noty_has_timeout">
            <div id="notification-message" class="noty_body"></div>
            <div class="noty_progressbar" style="transition: width 5000ms linear 0s; width: 0%;"></div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const keyInput = document.getElementById('key');
            const fileUploadInput = document.getElementById('file-upload');
            const fileNameDisplay = document.getElementById('file-name');

            fileUploadInput.addEventListener('change', function(e) {
                const fileName = e.target.files.length > 0 ? e.target.files[0].name : 'Nenhum arquivo selecionado...';
                fileNameDisplay.textContent = fileName;
            });

            form.addEventListener('submit', function(event) {
                if (keyInput.value.trim() === '') {
                    event.preventDefault();
                    showNotification('Chave de criptografia não fornecida...', 5000);
                    keyInput.classList.add('shake');
                    setTimeout(() => {
                        keyInput.classList.remove('shake');
                    }, 3000);
                } else if (fileUploadInput.files.length === 0) {
                    event.preventDefault();
                    showNotification('Nenhum arquivo selecionado...', 5000);
                }
            });

            keyInput.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    this.classList.remove('shake');
                }
            });
        });

        function showNotification(message, duration) {
            const notificationContainer = document.getElementById('notification-container');
            const messageDisplay = document.getElementById('notification-message');
            const progressBar = document.querySelector('.noty_progressbar');

            messageDisplay.textContent = message;

            notificationContainer.style.display = 'block';

            progressBar.style.width = '0%';
            progressBar.style.transition = 'none';
            setTimeout(() => {
                progressBar.style.transition = `width ${duration}ms linear`;
                progressBar.style.width = '100%';
            }, 10);

            setTimeout(() => {
                hideNotification();
            }, duration);

            notificationContainer.addEventListener('click', hideNotification);

            function hideNotification() {
                notificationContainer.style.display = 'none';
                progressBar.style.width = '0%';
                notificationContainer.removeEventListener('click', hideNotification);
            }
        }
    </script>
</body>

</html>
