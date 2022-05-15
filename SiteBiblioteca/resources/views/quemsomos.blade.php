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

    <title>Quem Somos - Bibliote Evolution</title>
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
              <li><a class="nav-link scrollto active" href="/quemsomos">Quem Somos</a></li>
              <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
              <li><a class="getstarted scrollto" href="/login">Iniciar Sessão</a></li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      
        </div>
    </header>

    <main id="main">

        <section id="team" class="team section-bg">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Quem Somos</h2>
              <p>Conheça os desenvolvedores da Biblioteca Evolution</p>
            </div>
    
            <div class="row" style="justify-content: center;">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{ URL::asset('img/team/Alice.jpeg') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Alice Santos</h4>
                    <span>Designer</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                  <div class="member-img">
                    <img src="{{ URL::asset('img/team/Douglas.png') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Douglas Souza</h4>
                    <span>DBA</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                  <div class="member-img">
                    <img src="{{ URL::asset('img/team/Guilherme.png') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Guilherme Lopes</h4>
                    <span>Analista</span>
                  </div>
                </div>
              </div>
    
            </div>
    
            <br>
    
            <div class="row" style="justify-content: center;">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{ URL::asset('img/team/Letícia.png') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Letícia Moreira</h4>
                    <span>Designer</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                  <div class="member-img">
                    <img src="{{ URL::asset('img/team/Raquel.png') }}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Raquel Stefany</h4>
                    <span>Back-End</span>
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