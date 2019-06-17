<?php
include "chamarformatacao.php";
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <title>Tela Jogo</title>

  </head>
  <body class="bg-dark">
    <div class="p-2">

    </div>
    <div class="container bg-warning">
      <div class="row">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="" width=60 height=40>
          <div class="col-sm-11 pl-5 ml-4 " align="center">
            <div class="p-5 m-5">

            </div>
            <div class="container">
            <form action="verificarlogin.php" method="post" class="">
                <!-- action, informa para onde os dados iram -->
                <!-- post esconde os dados privados da url -->
                <label>Nick: </label>
                <input type="text" name="nick" value=""><br>
                <label>Senha: </label>
                <input type="password" name="senha" value=""><br>

                <input type="submit" value="Entrar" class="p-2 mt-1 btn-danger button">

              </div>
            <br>
            <div class="p-5 m-4">

            </div>
            <br>
            <div class="p-4 m-4">

            </div>
        </div>
      </div>
    </div>
  </body>
</html>
