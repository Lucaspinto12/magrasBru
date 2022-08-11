<?php  
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../model/crudConsulta.php' ;

    $idConsulta = filter_input(INPUT_GET, 'idConsulta', FILTER_SANITIZE_NUMBER_INT);

$consulta = new crud();
    $consulta->visualizar_consulta();
}      
   
