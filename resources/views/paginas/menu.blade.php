@extends('template.index')

@section('contents')
<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Confira nosso saboroso cardápio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sopa de lagosta</a><span>$25.95</span>
            </div>
            <div class="menu-ingredients">
              Lagosta, caldo de maracuja, legumes na brasa
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Barril de pão</a><span>$16.95</span>
            </div>
            <div class="menu-ingredients">
              Pão italiano, mussarela búfalo, tomate fresco, rúcula
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bolo de caranguejo</a><span>$40.95</span>
            </div>
            <div class="menu-ingredients">
               Servido em pão torrado com alface e molho tártaro
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Monte sua  salada</a><span>$18.95</span>
            </div>
            <div class="menu-ingredients">
              Folhas e legumes frescos, proteína a sua escolha
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Grelhado toscano</a><span>$79.95</span>
            </div>
            <div class="menu-ingredients">
              Frango grelhado com provolone, corações de alcachofra e pesto vermelho assado
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Palito de mussarela</a><span>$34.95</span>
            </div>
            <div class="menu-ingredients">
              Empanado de queijo mussarela, acompanhado com molho agridoce e salada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada grega</a><span>$19.95</span>
            </div>
            <div class="menu-ingredients">
               Espinafre fresco, alface romana crocante, tomate e azeitonas gregas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada de espinafre</a><span>$29.95</span>
            </div>
            <div class="menu-ingredients">
              Espinafre fresco com cogumelos, ovo cozido e vinagrete de bacon quente
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Rolinho de Lagosta</a><span>$90.95</span>
            </div>
            <div class="menu-ingredients">
              Carne rechonchuda de lagosta, maionese e alface crocante em um pão volumoso torrado
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
@endsection