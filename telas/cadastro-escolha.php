<?php
  require_once 'header.php';

  
?>

<div class="section-title">
    <h2>Cadastro</h2>  
</div>

    <section id="contact" class="contact">
        <div class="center-block">
          <div class="col-lg-6 offset-3">
            <form action="cadastro-verify.php" method="post" role="form" class="php-email-form">
              <!-- faça 3 inputs para escolha de cadastro, ponha valores neles e faça uma função para verificar que pagina ir direcionar -->
              <div class="row">
                <div class="form-group mt-3 ">
                  <input type="radio" name="user" id="user"> <p>Usuário</p>
                </div>
                <div class="form-group mt-3 ">
                  <input type="radio" name="profissional" id="profissional"> <p>Profissional</p>
                </div>
                <div class="form-group mt-3 ">
                  <input type="radio" name="profissional-user" id="profissional-user"> <p>Usuario e Profissional</p>
                </div>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Você sera redirecionado para o cadastro. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit" action="cadastro-verify.php"> Escolher </button></div>
            </form>

          </div>
        </div>
    </section>