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

    <title>Cadastrar-Se - Biblioteca Evolution</title>
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

    <main id="main">

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="wrapper fadeInDown">
                <div id="formContent" class="login">
                    <br>
                    <a href="/login">
                        <h2 class="inactive underlineHover"> Entrar </h2>
                    </a>
                    <a href="/cadastro">
                        <h2 class="active"> Cadastrar </h2>
                    </a>
    
                    <form action="/perfil">
                        <br>
                        <label class="labelf">Nome:</label>
                        <br>
                        <input type="text" class="fadeIn second" name="nome" placeholder="Digite seu nome" autocomplete="off" required>
                        <br>
                        <br>
                        <label class="labelf">Email:</label>
                        <br>
                        <input type="email" class="fadeIn second" name="email" placeholder="Digite seu email" autocomplete="off" required>
                        <br>
                        <br>
                        <label class="labelf">Senha:</label>
                        <br>
                        <input type="password" class="fadeIn third" name="senha" placeholder="Digite sua senha" required>
                        <br>
                        <br>
                        <input type="submit" name="logarse" class="fadeIn fourth" value="Iniciar Sessão">
                    </form>
    
                    <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu sua senha?</a>
                    </div>
    
                </div>
                
            </div>
        </section>
    
    </main>

    <footer id="footer">
        <div class="container">
        </div>
    </footer>
      
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS -->
    <script src="{{ URL::asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- JS -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    
</body>
</html>