<?php
  require_once 'header.php'
?>
<div class="section-title"> </div>

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li>Cadastro</li>
        </ol>
        <h2>Cadastro</h2>

      </div>
    </section>


<div class="section-title">
    <h2>Cadastro Profissional e Usuario</h2>  
</div>
    <section id="contact" class="contact">
      
        <div class="center-block">
          <div class="col-lg-6 offset-3">
            <form action="login_session.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group mt-3 ">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3 ">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Last Name" required>
                </div>
                <div class=" form-group mt-3 ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="confirm-email" id="confirm-email" placeholder="Confirm Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
              </div>
              </div>
            <div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Seu cadastro foi concluído. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit" action ="../index.php">Cadastrar</button></div>
            </form>
          </div>
        </div>
    </section><!-- End Contact Section -->