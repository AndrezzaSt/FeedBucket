<?php
  require_once 'header.php'
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Formulario de Feedback</li>
        </ol>
        <h2>Solicitação de Feedback:</h2>
      </div>
     
    </section>
<!-- End Breadcrumbs -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
            <i class='bx bx-user'></i>
              <h3>Profissional:</h3>
              <p>Andrezza Sturm </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
            <i class='bx bx-code-curly'></i>
              <h3>Área</h3>
              <p>Programação</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 offset-3">
            <form action="telas/form-de-feedback-2.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="form-group mt-3">
                    <input type="file" name="image"></label>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Pedir feedback</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


<?php
  require_once 'footer.php'
?>