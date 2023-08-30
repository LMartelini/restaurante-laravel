@extends('template.index')

@section('contents')
<!-- ======= Events Section ======= -->
<section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Eventos</h2>
          <p>Organize seu evento em nosso restaurante</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Festas de aniversário</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Organize sua festa de aniversário em nosso espaço, temos pacote incluindo:
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Buffet de aniversário.</li>
                    <li><i class="bi bi-check-circled"></i> Catálogo de decorações.</li>
                    <li><i class="bi bi-check-circled"></i> Ambiente climatizado.</li>
                  </ul>
                  <p>
                    Lugar perfeito para comemorar seu aniversário com amigos e familiares, com boa comida, ambiente aconchegante e playlist ao gosto do aniversariante.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Festas privadas</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Organize um evento privado em nosso espaço, temos pacote incluindo: 
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Conjunto de mesas e cadeiras.</li>
                    <li><i class="bi bi-check-circled"></i> Ambiente climatizado.</li>
                    <li><i class="bi bi-check-circled"></i> Buffet de pratos quentes.</li>
                  </ul>
                  <p>
                    Lugar perfeito para pequenos eventos ou reuniões, garantindo privacidade e atendendo às necessidades dos clientes.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Festas personalizadas</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Organize sua festa personalizada em nosso espaço, temos pacote incluindo: 
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Coquetelaria.</li>
                    <li><i class="bi bi-check-circled"></i> Buffet de frios.</li>
                    <li><i class="bi bi-check-circled"></i> Catálogo de decorações.</li>
                  </ul>
                  <p>
                    Lugar perfeito para uma festa menor e privativa, acompanhado de um barman com nossos coquetéis.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

@endsection