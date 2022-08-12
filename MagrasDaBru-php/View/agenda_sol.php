<?php
include_once("../Model/conexao.php");
$conn = conectar();
$result_consulta = "SELECT idConsulta, nome, dia_consulta, hora_consulta, pago FROM consulta";
$resultado_consulta = mysqli_query($conn, $result_consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Agenda Sol</h1>
    </div>
    <div class="pull-right">
        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar
        </button>
    </div>
    <!-- Inicio Modal -->
    <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Marcar Consulta</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../Controller/controller_cadastrar_consulta.php"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nomeEvento" class="form-label">Nome do paciente</label>
                            <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="dataEvento" class="form-label">Dia da consulta</label>
                            <input type="date" name="diaEvento" id="diaEvento" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="dataEvento" class="form-label">Hora da consulta</label>
                            <input type="time" name="horaEvento" id="horaEvento" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="dataEvento" class="form-label">Preço</label>
                            <input type="text" name="preco" id="preco" class="form-control" required="">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="botao" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal -->

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do Paciente</th>
                    <th>Dia da consulta</th>
                    <th>Horario da consulta</th>
                    <th>Pago</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($rows_consulta = mysqli_fetch_assoc($resultado_consulta)) { ?>
                    <tr>
                        <td><?php echo $rows_consulta['idConsulta']; ?></td>
                        <td><?php echo $rows_consulta['nome']; ?></td>
                        <td><?php echo $rows_consulta['dia_consulta']; ?></td>
                        <td><?php echo $rows_consulta['hora_consulta']; ?></td>
                        <td><?php echo $rows_consulta['pago']; ?></td>
                        <td>
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal"
                                    data-target="#myModal<?php echo $rows_consulta['idConsulta']; ?>">Visualizar
                            </button>

                            <button type="button" class="btn btn-xs btn-warning" data-toggle="modal"
                                    data-target="#exampleModal"
                                    data-whatever="<?php echo $rows_consulta['idConsulta']; ?>"
                                    data-whatevernome="<?php echo $rows_consulta['nome']; ?>"
                                    data-whateverdetalhes="<?php echo $rows_consulta['dia_consulta']; ?>">Editar
                            </button>

                            <a href="processa_apagar.php?id=<?php echo $rows_consulta['idConsulta']; ?>">
                                <button type="button" class="btn btn-xs btn-danger">Apagar</button>
                            </a>
                        </td>
                    </tr>
                    <!-- Inicio Modal -->
                    <div class="modal fade" id="myModal<?php echo $rows_consulta['idConsulta']; ?>" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center"
                                        id="myModalLabel"><?php echo $rows_consulta['nome']; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <p><?php echo $rows_consulta['idConsulta']; ?></p>
                                    <p><?php echo $rows_consulta['nome']; ?></p>
                                    <p><?php echo $rows_consulta['dia_consulta']; ?></p>
                                    <p><?php echo $rows_consulta['hora_consulta']; ?></p>
                                    <p><?php echo $rows_consulta['pago']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal -->
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Editar</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Model/atualizarConsulta.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeEvento" class="form-label">Nome do paciente</label>
                        <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="dataEvento" class="form-label">Dia da consulta</label>
                        <input type="date" name="diaEvento" id="diaEvento" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="dataEvento" class="form-label">Hora da consulta</label>
                        <input type="time" name="horaEvento" id="horaEvento" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="dataEvento" class="form-label">Preço</label>
                        <input type="text" name="preco" id="preco" class="form-control" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="botao" class="btn btn-success">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdetalhes = button.data('whateverdetalhes')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Id do paciente: ' + recipient)
        modal.find('#id_curso').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#detalhes-text').val(recipientdetalhes)
    })
</script>
</body>
</html>