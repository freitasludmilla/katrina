<?php

include "../conexao/conexao.php";

$nick = "";

if(isset($_POST['nick'])){
    $nick = $_POST['nick'];
}
 $senha = "";
if(isset($_POST['nick'])){
    $senha = $_POST['senha'];
 }

 // Query the database for user
$select = "SELECT * FROM aluno WHERE nick = '$nick' AND senha = '$senha'";
$result = mysqli_query($con, $select) or die('Failed to query database. <br>'.mysqli_error($con));
$row = mysqli_fetch_array($result);
if ( $row['nick'] == $nick && $row['senha'] == $senha ) {
  echo "Logou com sucesso! Bem vindo(a), ".$row['nome']."!";
  // include ""; //Adicionar jogo
 } else {
   $select2 = "SELECT * FROM professor WHERE nick = '$nick' AND senha = '$senha'";
   $result2 = mysqli_query($con, $select2) or die('Failed to query database. <br>'.mysqli_error($con));
   $row2 = mysqli_fetch_array($result2);
   if ( $row2['nick'] == $nick && $row2['senha'] == $senha ) {
     echo "Logou com sucesso! Bem vindo(a), ".$row2['nome']."!";
     // include ""; //Adicionar jogo
   } else {
       echo "O login falhou, tente novamente!";
   }
}

?>
