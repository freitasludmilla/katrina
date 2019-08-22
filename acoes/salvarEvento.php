<?php

include "../conexao/conexao.php";

$titulo = $_POST['titulo'];
$dia = $_POST['dia'];
$horai = $_POST['horai'];
$horaf = $_POST['horaf'];
$local = $_POST['local'];
$publico = $_POST['publico'];
$limite = $_POST['limite'];
$descricao = $_POST['descricao'];

$cad_evento = "INSERT INTO evento (nome, data, numpartic, horario, local, aprovacao, assunto, idpes ) VALUES ('$titulo', '$dia', '$limite', '$horai', '$local', 'true', '$descricao', '1')";
echo $cad_evento;

// $resultado = mysqli_query($con, $sql);
//strtolower($cad_pessoa);

//$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";


// $resultado = mysqli_query($con, $cad_pessoa);
// if($resultado){
//    echo "cadastrado com sucesso!";
// }


 ?>
