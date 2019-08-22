<?php
include "templates/chamarformatacao.php";
 ?>

<!DOCTYPE html>

<!-- templates - telas padrão
cabeçalho

controle - algoritmos

require 'template/header.php';

index - endereço
onde chama as telas

 -->

<html lang="pt-br" dir="ltr">
  <head>
    <title>Login - Katrina</title>
    <meta charset="utf-8">
  </head>


  <body class="bg-success">

    <div class="p-3 m-1">
    </div>


    <div class="container bg-white">

      <div class="row">

        <div class="col-sm-12  " align="center">
          <div class="p-1 m-1">
          </div>

          <img src="../titulo.png" height="30" alt="">


        </div>


      </div>

        <div class="row2" align="center">

          <div class="p-3 m-3">
          </div>


          <form action="verificarlogin.php" method="post" class="" id="formulario">
              <!-- action, informa para onde os dados iram -->
              <!-- post esconde os dados privados da url -->
              <label>Login: </label>
              <input type="text" name="login" value="" class="form-login obrigatorio">
              <span class="mensagem"></span>
              <br>

              <label>Senha: </label>
              <input type="password" name="senha" value="" class="form-senha obrigatorio">
              <span class="mensagem"></span>
              <br>
              <br>

              <button type="submit" class="mt-3 btn btn-info" name="">Entrar</button>


          </form>


        </div>

        <div class="p-3 m-3">
        </div>


        <div class="row3 col-sm-12  " align="center">
            <div class="p-1 m-1">
            </div>

            <img src="../LogoKat.png" height="50" alt="">
            <br>
            <br>
          </div>


      </div>

      <!-- termina branco  -->

      <div class="row4 col-sm-12  " align="center">
          <div class="p-1 m-1">
          </div>

          <p>Desenvolvido por</p>
          <p>Ludmilla Freitas e Isabela Cambiriba</p>
          <p>Brasil</p>

        </div>

  <!-- termina verde -->

  </body>
</html>
