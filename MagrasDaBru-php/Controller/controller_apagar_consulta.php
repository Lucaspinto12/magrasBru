<?php

$botao = filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if (isset($botao)) {


    include_once '../model/crudConsulta.php';


    $idConsulta = filter_input(INPUT_POST, 'idConsulta', FILTER_SANITIZE_STRING);

    $consulta = new crud();
    $consulta->setIdConsulta($idConsulta);
    $consulta->excluir_consulta();

}      

