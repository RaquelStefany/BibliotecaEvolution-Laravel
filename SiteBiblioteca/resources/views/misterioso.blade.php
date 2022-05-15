<section id="more-services" class="more-services">
    <div class="container">
      <div class="row">                      
      @for ($i = 0; $i < {{$quantidade}}; $i++)
        <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0 exlivro">
          <div class="card" style='background-image: url("{{ URL::asset('img/livros/livro-misterio.jpg') }}");' data-aos="fade-up" data-aos-delay="200">
            <div class="card-body">
              <h5 class="card-title"><a href="">Livro Misterioso</a></h5>
              <p class="card-text">- Você não sabe nem eu</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i>Adicionar a Leitura</a></div>
            </div>
          </div>
        </div>
      @endfor           
    </div>
</section>