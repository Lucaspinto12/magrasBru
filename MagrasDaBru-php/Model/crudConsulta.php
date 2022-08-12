<?php

require "conexao.php";

session_start();

class crud
{
    public $email;
    public $senha;
    public $nomeEvento;
    public $diaEvento;
    public $horaEvento;
    public $pago;
    public $idConsulta;

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

    public function setDiaEvento($diaEvento)
    {
        $this->diaEvento = $diaEvento;
    }

    public function getDiaEvento()
    {
        return $this->diaEvento;

    }

    public function setHoraEvento($horaEvento)
    {
        $this->horaEvento = $horaEvento;
    }

    public function getHoraEvento()
    {
        return $this->horaEvento;

    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;

    }

    public function setPago($pago)
    {
        $this->pago = $pago;
    }

    public function getPago()
    {
        return $this->pago;

    }

    public function setIdConsulta($idConsulta)
    {
        $this->idConsulta = $idConsulta;
    }

    public function getIdConsulta()
    {
        return $this->idConsulta;

    }

    function selecionar_Usuario()
    {


        $conn = conectar();
        $email = $this->getEmail();
        $senha = $this->getSenha();

        $result_usuario = "SELECT * FROM usuario  WHERE email= '$email' && senha = '$senha' LIMIT 1";

        $resultado_usuario = mysqli_query($conn, $result_usuario);

        $resultado = mysqli_fetch_assoc($resultado_usuario);


        if (isset($resultado)) {

            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];

            header("Location: ../View/index.php");


        } else {

            echo "<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/login.html';</script>";

        }


    }

    function inserir_consulta()
    {
        $horaEvento = $this->getHoraEvento();


        $conn = conectar();

        $consulta_horario = mysqli_query($conn, "SELECT * FROM consulta WHERE hora_consulta = '$horaEvento'");


        if (!mysqli_num_rows($consulta_horario) == 0) {
            echo "<script language='javascript' type='text/javascript'>alert('Consulta não pode ser marcada, pois ja possui horario');window.location.href='../view/agenda_sol.php';</script>";
        } else {
            $sql = "INSERT INTO consulta (nome,dia_consulta,hora_consulta) values ('" . $this->getNomeEvento() . "','" . $this->getDiaEvento() . "','" . $this->getHoraEvento() . "')";
            mysqli_query($conn, $sql);

            echo "<script language='javascript' type='text/javascript'>alert('Consulta marcada');window.location.href='../view/agenda_sol.php';</script>";
        }
    }
    function excluir_consulta(){
        $conn = conectar();
        $idConsulta = $this->getIdConsulta();

        $result_cursos = "DELETE FROM concurso WHERE idConsulta = '$idConsulta'";
        $resultado_cursos = mysqli_query($conn, $result_cursos);

    }
/*
    function alterar_consulta()
    {

        $conn = conectar();
        $idConsulta = mysqli_real_escape_string($conn, $_POST['$idConsulta']);
        $consulta->setIdConsulta($idConsulta);


        $nomeEvento = $this->getNomeEvento();
        $diaEvento = $this->getDiaEvento();
        $horaEvento = $this->getHoraEvento();
        $pago = $this->getPago();
        $idConsulta = $this->getIdConsulta();

        $pega_produto = mysqli_query($conn, "SELECT * FROM produto WHERE idConsulta= 'idConsulta'");

        if (mysqli_num_rows($pega_produto) == 0) {

            echo "<script language='javascript' type='text/javascript'>alert('Este Produto não esta cadastrado em nossos registros');window.location.href='../View/agenda_sol.php'</script>";

        } else {


            $result_Produto = ("UPDATE produto SET nome = '" . $nomeEvento . "', dia_consulta = '" . $diaEvento . "', hora_consulta = '" . $horaEvento . "', pago = '" . $pago . "' WHERE idConsulta = '" . $IdConsulta . "'");

            mysqli_query($conn, $result_Produto);

            if (mysqli_affected_rows($conn) != 0) {
                echo "
              <script language='javascript' type='text/javascript'>alert('Produto alterada com sucesso!');window.location.href='../View/produto.php'</script>";


            } else {
                echo "
                 <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar Produto');window.location.href='../View/alterarProduto.php'</script>";


            }


        }


    }
*/

}