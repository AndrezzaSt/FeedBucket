
<?php
  require_once 'header.php'
?>

<div class="section-title"> </div>
    
<div class="section-title">
    <h2>Cadastro</h2>  
</div>
    <section id="contact" class="contact">
      
        <div class="center-block">
          <div class="col-lg-6 offset-3">
            <form action="login.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class=" form-group mt-3 ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
              </div>
            
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Seu Login foi concluído. Obrigado!</div>
              </div>
              <div class="text-center" ><button type="submit" action ="login.php" name="loggedIn">Login</button></div>
            </form>
          </div>
        </div>
    </section>