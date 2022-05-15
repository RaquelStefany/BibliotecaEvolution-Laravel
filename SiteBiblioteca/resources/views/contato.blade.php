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

    <title>Contato - Biblioteca Evolution</title>
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
              <li><a class="nav-link scrollto active" href="/contato">Contato</a></li>
              <li><a class="getstarted scrollto" href="/login">Iniciar Sessão</a></li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      
        </div>
    </header>

    <main id="main">

        <section id="contact" class="contact">
            <div class="container">
    
                <div class="section-title" data-aos="fade-up">
                <h2>Precisa de ajuda?</h2>
                </div>
        
                <div class="row">
        
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>
                            Entre em contato conosco
                        </h3>
                        <p>
                            Você possui dúvidas ao utilizar a plataforma?
                        </p>
                        <br>
                        <p>
                            Não encontrou seu livro favorito?
                        </p>
                        <br>
                        <p>
                            Deixe sua dúvida ou sugestão no formulário abaixo.
                        </p>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>
                                Pr. Cel. Lopes, 387 - Centro, São Vicente - SP, 11310-020
                            </p>
                        </div>
            
                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>
                                bibliotecaevolution@gmail.com
                            </p>
                        </div>
            
                        <div>
                            <i class="ri-phone-line"></i>
                            <p>
                                (13) 98837-5445
                            </p>
                        </div>        
                    </div>
                </div>
        
                <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">
                                Loading
                            </div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">
                                Enviar
                            </button>
                        </div>
                    </form>
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