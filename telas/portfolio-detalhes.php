<?php
  require_once 'header_logged.php'
?>

<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Projeto</li>
        </ol>
        <h2>Perfil de profissional</h2>

      </div>
    </section><!-- End Breadcrumbs -->

     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Perfil de Profissional</h3>
              <ul>
                <li><strong>Category</strong>: Programação java</li>
                <li><strong>Profissional</strong>: Andrezza</li>
                <li><strong>Membro desde de</strong>: 01 March, 2020</li>
                <li><strong>Site de portfolio</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
              <p>
                  Gostou do perfil? solicite seu feedback:
              </p>
            </div>
            <form action="form-de-feedback.php" method="post" role="form" class="php-email-form">
              <div class="portfolio-send">
                  <div class="text-center"> <button type="submit" action ="telas/form-de-feedback.php">Solicitar</button></div>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <?php
  require_once 'footer.php'
?>