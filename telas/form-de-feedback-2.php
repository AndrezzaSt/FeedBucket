<?php
  require_once 'header_logged.php'
?>

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">

            <ol>
              <li><a href="../home.php">Home</a></li>
              <li>Formulario de feedback</li>
            </ol>
            <h2>Feedback enviado!</h2>

          </div>
  </section>
  <!-- End Breadcrumbs -->

    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 offset-3 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-check-circle"></i></div>
              <h4><a href="desenvolvimento.php">Pedido realizado!</a></h4>
              <p>Para revisar seu pedido, clique aqui:</p>
              <div class ="">
                  <form action="Pedido.php" method="post" role="form" class="php-email-form">
                  <div class="portfolio-send">
                      <div class="text-center"> <button type="submit" action ="Pedido.php">Revisar</button></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
  require_once 'footer.php'
?>