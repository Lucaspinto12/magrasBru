<?php
include_once("../Model/conexao.php");
$conn = conectar();
$idConsulta = mysqli_real_escape_string($conn, $_POST['idConsulta']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$dia_consulta = mysqli_real_escape_string($conn, $_POST['dia_consulta']);

$result_cursos = "UPDATE cursos SET nome='$nome', dia_consulta = '$dia_consulta' WHERE idConsulta = '$idConsulta'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>

    <body> <?php
    if (mysqli_affected_rows($conn) != 0) {
        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso alterado com Sucesso.\");
				</script>
			";
    } else {
        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi alterado com Sucesso.\");
				</script>
			";
    } ?>
    </body>
    </html>
<?php $conn->close(); ?>