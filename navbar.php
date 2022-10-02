<?php ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#F0DB4F">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <link rel="shortcut icon" type="image/png" href="./img/logo.jpeg">
    <link rel="apple-touch-icon" href="./manzana.png">
    <link rel="apple-touch-startup-image" href="./manzana.png">

    <link rel="manifest" href="manifest.json">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  </head>
  <body>
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="index.php"><img src="./img/logo.jpeg" style="border-radius: 50px;" height="40" width="40" alt="..."></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active text-success" aria-current="page" href="index.php"><i class='fas fa-laptop-house'></i>Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="citas.php"><i class='fas fa-edit'></i>Citas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="nosotros.php"><i class='fas fa-user-circle'></i>Nosotros</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="nav-link text-success" href="inicio.php"><img src="./img/manzana.png" height="30" width="30" alt="..."></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>