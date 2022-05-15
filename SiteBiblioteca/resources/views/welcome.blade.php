@component('header')
@endcomponent

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Bem Vindo, Somos a Biblioteca Evolution.</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">A plataforma onde você encontra seus livros favoritos.<br>Não se perca mais em seu mundo mágico.</h2>
                <div data-aos="fade-up" data-aos-delay="800">
                <a href="/login" class="btn-get-started scrollto">Iniciar Sessão</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ URL::asset('img/livros-digitais.jpg') }}" class="img-fluid animated" alt="">
            </div>
            </div>
        </div>
    
    </section>
      
    <section id="services" class="services">
        <div class="container">
    
        <div class="section-title" data-aos="fade-up">
            <h2>Sobre a plataforma</h2>
        </div>
    
        <div class="row" style="place-content: center;"><div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="width: 100%;">
                <div class="icon">
                    <i class="bi bi-book"></i>
                </div>
                <h4 class="title">
                    <a href="">
                        Conhecer Novas Leituras
                    </a>
                </h4>
                <p class="description">
                    Veja outros livros para você se apaixonar por novos mundos.
                </p>
            </div>
        </div>
    
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                <div class="icon">
                    <i class="bi bi-bookmark-plus"></i>
                </div>
                <h4 class="title">
                    <a href="">
                        Salvar o seu progresso
                    </a>
                </h4>
                <p class="description">
                    Salve seu progresso e não se perca mais.
                </p>
            </div>
        </div>          
    
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                <div class="icon">
                    <i class="bi bi-bar-chart-line"></i>
                </div>
                <h4 class="title">
                    <a href="">
                        Crie Metas
                    </a>
                </h4>
                <p class="description">
                    Crie metas e alcance seus objetivos.
                </p>
            </div>
        </div>
    </section>

@component('footer')
@endcomponent