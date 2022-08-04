<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
 include_once '../Model/crud.php' ;   
 
    $nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf= filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $nascimento= filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $endereço= filter_input(INPUT_POST, 'edereco', FILTER_SANITIZE_STRING);
    $numero= filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $bairro= filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cidade= filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado= filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $estado_civil= filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_STRING);
    $filhos= filter_input(INPUT_POST, 'filhos', FILTER_SANITIZE_STRING);
    $= filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);

$inserir = new crud();
$inserir->setPreco($preco);
$inserir->setLocal_jogo($local_jogo);
$inserir->setData_jogo($data_jogo);
$inserir->setJogo($jogo);
$inserir->setId_ingresso($id_ingresso);
$inserir->inserir_Ingresso(); 
 
 
}