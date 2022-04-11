<?php 
  session_start();
  if (isset($_POST["email"]) && isset($_POST['password']) ){
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $usuario = $email;
    if($_POST['email']  ) {
      $usuarios = [
          [
              "email" => "aluno@uniritter.com.br",
              "password" => "1234567",
          ],
          [
              "email" => "outro@email.com.br",
              "password" => "7654321",
          ],
      ];
  
      foreach($usuarios as $usuario) {
          $emailValido = $email === $usuario['email'];
          $senhaValida = $senha === $usuario['password'];
  
          if($emailValido && $senhaValida) {
              $_SESSION['erros'] = null;
              $_SESSION['usuario'] = $usuario['email'];
              $exp = time() + 60 * 60 * 24 * 30;
              setcookie('usuario', $usuario['email'], $exp);
              header('Location: index.php');
          }
      }
  }
   $_SESSION['loggedIn'] = true;
  }

?>

<?php
  require_once 'header.php'
?>

<div class="section-title"> </div>
    
<div class="section-title">
    <h2>Cadastro</h2>  
</div>
    <section id="contact" class="contact">
      
        <div class="center-block">
          <div class="col-lg-6">
            <form action="../index.php" method="post" role="form" class="php-email-form">
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
              <div class="text-center" ><button type="submit" action ="../index.php" name="loggedIn">Login</button></div>
            </form>
          </div>
        </div>
    </section><!-- End Contact Section -->