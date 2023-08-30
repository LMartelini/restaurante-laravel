@extends('template.index')

@section('contents')
<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Sobre o Filipa</h3>
            <p class="fst-italic">
                  Imerso na atmosfera vintage que sempre inspirou as empresas do Grupo Carmelina, o bistrô nos transporta para o clássico de tempos passados, ao mesmo tempo que nos encanta com surpresas modernas e criativas.
                  A culinária europeia, predominante francesa, se mistura com sabores brasileiros e nos faz explorar o mundo enquanto honra aquilo que é cultivado em nossa região. 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Sabores intensos</li>
              <li><i class="bi bi-check-circle"></i> Ingredientes frescos</li>
              <li><i class="bi bi-check-circle"></i> Atendimento primiroso</li>
            </ul>
            <p>
              Nossa missão é atender os clientes para uma experiência inesquecível. Permita-se, venha se apaixonar pelo Filipa!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Por que nós?</h2>
          <p>Porque escolher nosso restaurante</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>GASTRONOMIA</h4>
              <p>Entradas, pratos, lanches e sobremesas, tudo pensado para harmonizar com diferentes tipos de bebidas.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>AMBIENTE INCRÍVEL</h4>
              <p>Nossas casas possuem um clima intimista e aconchegante, com decoração artística e uma boa playlist como trilha sonora.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>COQUETELARIA</h4>
              <p>Nosso cardápio de drinks é um destaque à parte, contando com coquetéis clássicos e opções autorais já premiadas.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
@endsection