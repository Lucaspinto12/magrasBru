<?php

require "conexao.php";

 session_start(); 

class crud {  
  public $email;    
  public $senha;
  public $nomeEvento;    
  public $dataEvento;
  
  public function setEmail($email)
   {
    $this->email = $email;
   }

  public function getEmail()
   {
    return $this->email;
  
   }
   public function setNomeEvento($nomeEvento)
   {
    $this->nomeEvento = $nomeEvento;
   }

  public function getNomeEvento()
   {
    return $this->nomeEvento;
  
   }
   public function setDataEvento($dataEvento)
   {
    $this->dataEvento = $dataEvento;
   }

  public function getDataEvento()
   {
    return $this->dataEvento;
  
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

        header("Location: ../View/index.php");           

    
    }else{            
   
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/login.html';</script>";
     
    }


}
function inserir_consulta(){ 

  $conn= conectar();   

  $sql = "INSERT INTO consulta (nome,data_consulta) values('".$this->getNomeEvento()."','".$this->getDataEvento()."')";
   mysqli_query($conn,$sql);   

   echo"<script language='javascript' type='text/javascript'>alert('Consulta marcada');window.location.href='../view/agenda_sol.php';</script>";
 }
 
}