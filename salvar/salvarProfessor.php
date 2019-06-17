<?php

$info_prof = "INSERT INTO professor (nome, nick, senha)
VALUES ('$nome', '$nick', '$senha')";
// $result_prof = mysqli_query($con, $info_prof);

$prof_turma = "INSERT INTO turma (escola, turma, periodo, data, idprofessor) VALUES ('$escola', '$turma', '$peri', '$data', (select LAST_INSERT_ID()))";
// $result_turma = mysqli_query($con, $prof_turma);

mysqli_query($con, $info_prof) or die(mysqli_error($con));

mysqli_query($con, $prof_turma) or die(mysqli_error($con));

 ?>
