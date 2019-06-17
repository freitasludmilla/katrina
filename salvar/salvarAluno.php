<?php

include "../conexao/conexao.php";

$nome = $_POST['nome'];
$escola = $_POST['escola'];
$turma = $_POST['turma'];
$peri = $_POST['periodo'];
$data = $_POST['data'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];

$aluno_turma = "INSERT INTO turma (escola, turma, periodo, data) VALUES ('$escola', '$turma', '$peri', '$data')";
strtolower($aluno_turma);

$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";

//Inserindo aluno
$info_aluno = "INSERT INTO aluno (nome, nick, senha, idturma)
VALUES ('$nome', '$nick', '$senha', '$id')";
// $result_prof = mysqli_query($con, $info_prof);

mysqli_query($con, $info_aluno) or die(mysqli_error($con));

mysqli_query($con, $aluno_turma) or die(mysqli_error($con));
echo 'Gravado com sucesso'; //Incluir o jogo nessa parte

//Descobrir o que tem de errado com a sintaxe
//You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
//near 'ifpr - campus paranavai' AND turma = '4 info' AND periodo = 'matutino' ')' at line 2

 ?>
