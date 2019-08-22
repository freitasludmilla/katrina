<?php

include "../conexao/conexao.php";

$nome = $_POST['nome'];
$username = $_POST['username'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];

$funcao = $_POST['funcao'];

$ra = $_POST['ra'];
$anoIngresso = $_POST['anoIngresso'];
$curso = $_POST['curso'];

$siape = $_POST['siape'];
$formacao = $_POST['formacao'];

$senha = $_POST['senha'];


$cad_pessoa = "INSERT INTO pessoa (nome,	nomeUsuario,	rg,	cpf, senha) VALUES ('$nome', '$username', '$rg', '$cpf', '$senha')";
echo $cad_pessoa;
// $resultado = mysqli_query($con, $sql);
//strtolower($cad_pessoa);

//$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";


// $resultado = mysqli_query($con, $cad_pessoa);
// if($resultado){
//    echo "cadastrado com sucesso!";
// }


 ?>
