<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <style>
        body {
            background: ;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light fixed-top" style="background-color: #BA55D3;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Magras da Bru</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="background-color: white;" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Magras da Bru</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Agenda
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" href="#">Solange</a></li>

                            <li><a class="dropdown-item" href="#">Mari</a></li>
                            <li>

                            </li>
                            <li><a class="dropdown-item" href="agenda_bruna.php">Bruna</a></li>
                        </ul>
                    </li>

                    <form action="index.php">
                        <input type="submit" value="Voltar"><br>
                    </form>

                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agenda Sol</h1>
        </div>
    </div>
    <!-- Inicio Modal cadastrar usuario -->
    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Marcar consulta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgAlertaErro"></span>
                    <form action="../Controller/controller_cadastrar_consulta.php" method="POST" class="row g-3"
                          id="cad-usuario-form">

                        <div class="col-12">
                            <label for="nomeEvento" class="form-label">Nome do paciente</label>
                            <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" required="">
                        </div>
                        <div class="col-12">
                            <label for="dataEvento" class="form-label">Dia da consulta</label>
                            <input type="date" name="diaEvento" id="diaEvento" class="form-control" required="">
                        </div>
                        <div class="col-12">
                            <label for="dataEvento" class="form-label">Hora da consulta</label>
                            <input type="time" name="horaEvento" id="horaEvento" class="form-control" required="">
                        </div>
                        <div class="col-12">
                            <label for="dataEvento" class="form-label">Preço</label>
                            <input type="text" name="preco" id="preco" class="form-control" required="">
                        </div>
                        <div class="col-12">
                            <input type="submit" name="botao" class="btn btn-outline-success btn-sm"
                                   id="cad-usaurio-btn" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal cadastrar usuario -->
    <!-- Inicio Modal visualizar usuario -->
    <div class="modal fade" id="visUsuarioModal" tabindex="-1" aria-labelledby="visUsuarioModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visUsuarioModalLabel">Visualizar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgAlertaErroVis"></span>
                    <dl class="row">
                        <dt class="col-sm-3">ID</dt>
                        <dd class="col-sm-9"><span id="idUsuario"></span></dd>

                        <dt class="col-sm-3">Nome</dt>
                        <dd class="col-sm-9"><span id="nomeUsuario"></span></dd>

                        <dt class="col-sm-3">E-mail</dt>
                        <dd class="col-sm-9"><span id="emailUsuario"></span></dd>

                        <dt class="col-sm-3">Logradouro</dt>
                        <dd class="col-sm-9"><span id="logradouroUsuario"></span></dd>

                        <dt class="col-sm-3">Número</dt>
                        <dd class="col-sm-9"><span id="numeroUsuario"></span></dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal visualizar usuario -->

    <div class="row">

        <div class="col">
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                    data-bs-target="#cadUsuarioModal">Cadastrar
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-success">
                <th scope="col">Id</th>
                <th scope="col">Nome do Paciente</th>
                <th scope="col">Dia da consulta</th>
                <th scope="col">Horario da consulta</th>
                <th scope="col">Pago</th>
                <th scope="col">Ação</th>
                </thead>
                <tbody>
                <?php
                include_once("../Model/conexao.php");

                $conn = conectar();


                $consulta = "SELECT * FROM consulta ORDER BY dia_consulta";

                $resultadoConsutla = mysqli_query($conn, $consulta);

                while ($rowConsulta = mysqli_fetch_assoc($resultadoConsutla)){

                ?>
                <tr>
                    <th><?php echo $rowConsulta['idConsulta']; ?></th>
                    <td><?php echo $rowConsulta['nome']; ?></td>
                    <td><?php echo $rowConsulta['dia_consulta']; ?></td>
                    <td><?php echo $rowConsulta['hora_consulta']; ?></td>

                    <td><?php echo $rowConsulta['pago']; ?></td>
                    <td>
                        <a href='#' class='btn btn-outline-primary btn-sm' data-toggle="modal" data-target="#myModal<?php echo $rowConsulta['idConsulta']; ?>">Visualizar</a>
                        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rowConsulta['idConsulta']; ?>">Visualizar</button>
                        <a href='#' class='btn btn-outline-warning btn-sm' >Editar</a>
                        <a href='#' class='btn btn-outline-danger btn-sm' >Excluir</a>
                    </td>
                </tr>
                <!-- Inicio Modal -->
                <div class="modal fade" id="myModal<?php echo $rowConsulta['idConsulta']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rowConsulta['nome']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $rowConsulta['id']; ?></p>
                                <p><?php echo $rowConsulta['nome']; ?></p>
                                <p><?php echo $rowConsulta['dia_consulta']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Modal -->
                </tbody>
                <?php } ?> </tbody>
            </table>
        </div>
    </div>
</div>

<script src="js/custom.js"></script>

</body>
</html>