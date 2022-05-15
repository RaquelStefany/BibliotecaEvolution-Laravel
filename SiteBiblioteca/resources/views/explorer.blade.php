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
    {{-- <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet"> --}}

    <!-- Vendor CSS -->
    <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <title>Explorar - Biblioteca Evolution</title>
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
              <li><a class="nav-link scrollto active" href="/explorer">Explorar</a></li>
              <li><a class="nav-link scrollto" href="/quemsomos">Quem Somos</a></li>
              <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
              <li><a class="getstarted scrollto" href="/login">Iniciar Sessão</a></li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      
        </div>
    </header>

    <main id="main">

        <section id="services" class="services">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Explorar</h2>
              <p>Marque seu progresso, adicione livros a sua lista pessoal de leitura, encontre novos interesses. Veja os livros já catalogados.</p>
            </div>
    
          </div>
        </section>
    
    
        <section id="more-services" class="more-services">
          <div class="container">
    
            <div class="row">
              <div class="col-md-3 d-flex align-items-stretch">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/1007739147.jpg') }}");' data-aos="fade-up" data-aos-delay="100">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Harry Potter e a Pedra Filosofal</a></h5>
                    <p class="card-text">J.K. Rowling</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/61io1vJIWFL.jpg') }}");' data-aos="fade-up" data-aos-delay="200">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Como Eu Era Antes De Você</a></h5>
                    <p class="card-text">Jojo Moyes</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/61oIS8ewc9L.jpg') }}");' data-aos="fade-up" data-aos-delay="100">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">A Culpa É Das Estrelas</a></h5>
                    <p class="card-text">John Green</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/81Q11TuUR3L.jpg') }}");' data-aos="fade-up" data-aos-delay="200">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">A Cinco Passos de VocÊ</a></h5>
                    <p class="card-text">Rachel Lippincott</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/51UPmi8FVSL.jpg') }}");' data-aos="fade-up" data-aos-delay="200">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Maze Runner Correr ou Morrer</a></h5>
                    <p class="card-text">James Dashner</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/1006788625.jpg') }}");' data-aos="fade-up" data-aos-delay="100">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Crepúsculo</a></h5>
                    <p class="card-text">Stephenie Meyer</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/67f28837d213511cafbd03214c5a36d9.jpg') }}");' data-aos="fade-up" data-aos-delay="200">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Percy Jackson e o Ladrão de Raios</a></h5>
                    <p class="card-text">Rick Riordan</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex align-items-stretch">
                <div class="card" style='background-image: url("{{ URL::asset('img/livros/81SWBRKfExL.jpg') }}");' data-aos="fade-up" data-aos-delay="100">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Senhor dos Aneis A Sociedade do Anel</a></h5>
                    <p class="card-text">J.R.R. Tolkien</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
                  </div>
                </div>
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