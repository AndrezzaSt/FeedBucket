<?php
    function verify_user(){
        $redirect = 'user';
        if(!$_POST){
            if(filter_input(INPUT_POST, "user")){
                $redirect = 'user';
            }else if(filter_input(INPUT_POST, "profissional")){
                $redirect = 'profissional';
            }else if(filter_input(INPUT_POST, "profissional-user")){
                $redirect = 'profissional-user';
            }   
        }
        return $redirect;
    }

      $status = verify_user();
      if($status == 'user'){
        session_start();
        header('Location: cadastro.php');
      }elseif($status == 'profissional'){
        session_start();
        header('Location: cadastro-profissional.php');
      }elseif($status == 'profissional-user'){
        session_start();
        header('Location: cadastro-profissional-user.php');
    }
  
?>