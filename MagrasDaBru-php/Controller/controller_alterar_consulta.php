<?php  

$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../model/crudConsulta.php' ;   
 
$nomeEvento=filter_input(INPUT_POST, 'nomeEvento', FILTER_SANITIZE_STRING);
$diaEvento=filter_input(INPUT_POST, 'diaEvento', FILTER_SANITIZE_STRING);
$horaEvento=filter_input(INPUT_POST, 'horaEvento', FILTER_SANITIZE_STRING);
$pago=filter_input(INPUT_POST, 'pago', FILTER_SANITIZE_STRING);

$consulta = new crud();
$consulta->setNomeEvento($nomeEvento);
$consulta->setDiaEvento($diaEvento);
$consulta->setHoraEvento($horaEvento);
$consulta->setPago($pago);
$consulta->alterar_consulta();
        
}      

