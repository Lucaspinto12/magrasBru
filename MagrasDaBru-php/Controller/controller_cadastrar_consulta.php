<?php  

$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../model/crudConsulta.php' ;   
 
$nomeEvento=filter_input(INPUT_POST, 'nomeEvento', FILTER_SANITIZE_STRING);
$dataEvento=filter_input(INPUT_POST, 'dataEvento', FILTER_SANITIZE_STRING);

$consulta = new crud();
$consulta->setNomeEvento($nomeEvento);
$consulta->setDataEvento($dataEvento);
$consulta->inserir_consulta();
        
}      

