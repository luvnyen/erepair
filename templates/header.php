<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/templates/header.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/201ca005c3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Favicon - generated from https://favicon.io/favicon-converter/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">

    <?php
        $page = basename($_SERVER['PHP_SELF'], '.php');
        $title = '<title>ERepair – %s</title>';
        switch ($page) {
            case 'career':
                echo sprintf(
                    $title,
                    'Karir'
                );
                break;
            case 'catalog':
                echo sprintf(
                    $title,
                    'Katalog'
                );
                break;
            case 'incoming_order':
                echo sprintf(
                    $title,
                    'Daftar Pesanan Masuk'
                );
                break;
            case 'profile':
                echo sprintf(
                    $title,
                    'Profil'
                );
                break;
            case 'login':
                echo sprintf(
                    $title,
                    'Masuk'
                );
                break;
            case 'sign_up':
                echo sprintf(
                    $title,
                    'Daftar Akun'
                );
                break;
            case 'order_progress':
                echo sprintf(
                    $title,
                    'Pesanan Anda'
                );
                break;
            case 'checkout':
                echo sprintf(
                    $title,
                    'Checkout'
                );
                break;
            case 'customer_details':
                echo sprintf(
                    $title,
                    'Detail Pelanggan'
                );
                break;
            case 'index':
                echo sprintf(
                    $title,
                    'Solusi Perbaikan Elektronik'
                );
                break;
        }
    ?>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: SeparatePopper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="./index.php">
            <img src="./assets/templates/erepair-logo-left.svg" width="35" height="40" alt="ERepair Logo" loading="lazy">
            <img src="./assets/templates/erepair-logo.svg" width="130" height="70" alt="ERepair Logo" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item mr-4">
                    <a href="./catalog.php">Katalog</a>
                </li>
                <li class="nav-item mr-4">
                    <a href="./incoming_order.php">Pesanan Masuk</a>
                </li>
                <!-- If the user has already logged in -->
                <li class="nav-item mr-4">
                    <a href="./profile.php">Profil</a>
                </li>
                <!-- If the user has not logged in -->
                <li class="nav-item">
                    <a href="./login.php"><i class="fa-solid fa-right-to-bracket mr-2"></i>Masuk</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="./catalog.php" method="post" id="search__form">
                <div class=" search__container">
                    <input class="search__input form-control" type="search" id="search" placeholder="Lagi cari apa?" aria-label="Search" required>
                    <button class="search__button btn my-2 my-sm-0" type="submit">
                        <i class="search__icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>