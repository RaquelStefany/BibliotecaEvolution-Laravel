<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
    <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset('apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <title>Biblioteca - Biblioteca Evolution</title>
</head>
<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
      
          <div class="logo">
            <h1><a href="/">Biblioteca Evolution</a></h1>
          </div>
      
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="/">Inicio</a></li>
              <li><a class="nav-link scrollto" href="/explorer">Explorar</a></li>
              <li><a class="nav-link scrollto" href="/quemsomos">Quem Somos</a></li>
              <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
              <li><a class="getstarted scrollto" href="/login">Iniciar Sessão</a></li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      
        </div>
    </header>