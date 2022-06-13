<?php
  require_once 'header_logged.php';

  
?>
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
    <h2>Cadastro</h2>  
</div>

    <section id="contact" class="contact">
        <div class="center-block">
          <div class="col-lg-6 offset-3">
              <div class="row">
                <div class="php-email-form" >
                  <form action="cadastro.php" method="post">
                    <div class="form-group mt-3 ">
                      <input type="radio" name="user" id="user"> <p>Usuário</p>
                      <div><button type="submit" action="cadastro.php"> Escolher </button></div>
                    </div>
                  </form>
                  <form action="cadastro-profissional.php" method="post">
                    <div class="form-group mt-3 ">
                      <input type="radio" name="profissional" id="profissional"> <p>Profissional</p>
                      <div><button type="submit" action="cadastro-profissional.php"> Escolher </button></div>
                    </div>
                </form>
                <form action="cadastro-profissional-user.php" method="post">
                  <div class="form-group mt-3 ">
                    <input type="radio" name="profissional-user" id="profissional-user"> <p>Usuario e Profissional</p>
                    <div><button type="submit" action="cadastro-profissional-user.php"> Escolher </button></div>
                  </div>
                </form>
                </div>
              </div>
           

          </div>
        </div>
    </section>