<?php

include "../conexao/conexao.php";

$nome = $_POST['nome'];
$escola = $_POST['escola'];
$turma = $_POST['turma'];
$peri = $_POST['periodo'];
$data = $_POST['data'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];

 // Conferindo
$select = "SELECT * FROM aluno WHERE nick = '$nick'";
$result = mysqli_query($con, $select) or die('Failed to query database. <br>'.mysqli_error($con));
$row = mysqli_fetch_array($result);
if ( $row['nick'] == $nick ) {
  echo "Usuário já cadastrado!";
  include "../paginas/cadastroProfessor.php";
}
$select2 = "SELECT * FROM professor WHERE nick = '$nick'";
$result2 = mysqli_query($con, $select2) or die('Failed to query database. <br>'.mysqli_error($con));
$row2 = mysqli_fetch_array($result2);
if ( $row2['nick'] == $nick) {
  echo "Usuário já cadastrado!"; //Fazer aparecer a mensagem no meio da tela
  include "../paginas/cadastroProfessor.php";
} else {
  //Salvando
  include "../salvar/salvarProfessor.php";
  echo "Cadastrado com sucesso!";
  include "../paginas/login.php";
}

?>
