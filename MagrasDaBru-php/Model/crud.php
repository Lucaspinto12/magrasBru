<?php

require "conexao.php";

 session_start(); 

class crud {  
  public $email;    
  
  public $senha;
  
  public function setEmail($email)
   {
    $this->email = $email;
   }

  public function getEmail()
   {
    return $this->email;
  
   }
  
  public function setSenha($senha)
   {
    $this->senha = $senha;
   }
   
   public function getSenha()
   {
    return $this->senha;
  
   }
     
   function selecionar_Usuario(){
       
   
    $conn= conectar();  
     $email= $this->getEmail();
     $senha= $this->getSenha();

    $result_usuario = "SELECT * FROM usuario  WHERE email= '$email' && senha = '$senha' LIMIT 1";
    
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    
   
    if(isset($resultado)){

        $_SESSION['usuarioEmail'] = $resultado['email'];            		
        $_SESSION['usuarioSenha'] = $resultado['senha'];  
        $_SESSION['usuarioNome'] = $resultado['nome'];  


        header("Location: ../View/index.php");          

    
    }else{            
   
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../login.html';</script>";
     
    }


} 
}