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
              $_SESSION['usuario'] = "aluno@uniritter.com.br";
              header('Location: ../home.php');
              
              
          }else{
              echo "senha errada ;P";
            }
        } 
    }
  }
?>