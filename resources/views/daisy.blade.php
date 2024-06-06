<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello daisy</title>
    <script src="{{ asset('js/daisy.js') }}"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }

        #cube {
            position: relative;
            width: 200px;
            height: 200px;
            transform-style: preserve-3d;
            animation: spin 5s infinite linear;
        }

        .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 20px;
            background-color: #f5f5f5;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .face {
            position: absolute;
            width: 200px;
            height: 200px;
            background: #000000;
            border: 1px solid #ccc;
        }


        .face:nth-child(1) {
            transform: rotateY(0deg) translateZ(100px);
        }

        .face:nth-child(2) {
            transform: rotateY(90deg) translateZ(100px);
        }

        .face:nth-child(3) {
            transform: rotateY(180deg) translateZ(100px);
        }

        .face:nth-child(4) {
            transform: rotateY(-90deg) translateZ(100px);
        }

        .face:nth-child(5) {
            transform: rotateX(90deg) translateZ(100px);
        }

        .face:nth-child(6) {
            transform: rotateX(-90deg) translateZ(100px);
        }

        @keyframes spin {
            from {
                transform: rotateX(0deg) rotateY(0deg);
            }

            to {
                transform: rotateX(360deg) rotateY(360deg);
            }
        }
    </style>
</head>

<body>
    <div id="cube">
        <div class="face"><button class="btn">Click me</button></div>
        <div class="face"><button class="btn">Click me</button></div>
        <div class="face"><button class="btn">Click me</button></div>
        <div class="face"><button class="btn">Click me</button></div>
        <div class="face"><button class="btn">Click me</button></div>
        <div class="face"><button class="btn">Click me</button></div>
    </div>
</body>

</html>
