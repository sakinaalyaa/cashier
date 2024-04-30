<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            position: relative; /* Tambahkan ini */
        }

        main {
            flex: 1;
        }

        .footer {
            flex-shrink: 0;
            height: 60;
            background-color: #f5f5f5;
            text-align: center;
            position: relative; /* Tambahkan ini */
        }

        .footer-text {
            position: absolute;
            bottom: 10px; /* Atur jarak dari bawah */
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center justify-content-lg-between text-center">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="footer-text">
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
