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
    <title>Cadastro de pessoas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../formatacao/bootstrap.css">
    <link rel="stylesheet" href="../formatacao/formLogin.css">
    <link rel="stylesheet" href="../formatacao/formulario.css">
    <link rel="stylesheet" href="../formatacao/index.css">
    <link rel="stylesheet" href="../formatacao/jquery-3.4.1.js">

    <script src="../formatacao/jquery-3.4.1.js" charset="utf-8"></script>
    <!-- baixar e importar bootstrap.js
   -->
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


          <form action="../acoes/salvarPessoa.php" method="post" class="" id="formularioPessoa" onSubmit="return enviardados();">

              <label></label><br>
              <input type="text" name="nome" index="nome" maxlength = "50" placeholder="Nome"  value="" class="form-nome ob/rigatorio">
              <span class="mensagem"></span>
              <br>
          <!-- value: valor que o campo tem -->

              <label></label><br>
              <input type="text" name="username"  maxlength = "50" placeholder="Nome de usuário" value="" class="form-usuarionome obrigatorio">
              <span class="mensagem"></span>
              <br>

              <label></label><br>
              <input type="text" name="cpf" maxlength = "15" placeholder="CPF" value="" class="form-cpf obrigatorio">
              <span class="mensagem"></span>
              <br>

              <label></label><br>
              <input type="text" name="rg" maxlength = "15" placeholder="RG" value="" class="form-rg obrigatorio">
              <span class="mensagem"></span>
              <br>

              <br>
              <select name="funcao" id="funcao" class="form-funcao obrigatorio mr-3 ml-3 pr-5 pl-4"><br>

                <option value="">Selecione uma função</option>
                <option value="1">Docente</option>
                <option value="2">Discente</option>


              </select>
              <span class="mensagem"></span>
              <br>

              <!-- dados para aluno -->
              <div id="aluno" style="display: none;">

                <label></label><br>
                <input type="text" name="ra" maxlength = "11" placeholder="RA" value="" class="form-ra obrigatorio">
                <span class="mensagem"></span>
                <br>

                <label></label><br>
                <input type="text" name="anoIngresso" maxlength = "4" placeholder="anoIngresso" value="" class="form-anoIngresso obrigatorio">
                <span class="mensagem"></span>
                <br>

                <label></label><br>
                <input type=
                "text" name="curso" maxlength = "30" placeholder="curso" value="" class="form-curso obrigatorio">
                <span class="mensagem"></span>
                <br>

              </div>

              <!-- dados para servidor -->
              <div id="servidor"  style="display: none;">

                <label></label><br>
                <input type="text" name="siape" maxlength = "10" placeholder="siape" value="" class="form-siape obrigatorio">
                <span class="mensagem"></span>
                <br>

                <label></label><br>
                <input type="text" name="formacao" maxlength = "30" placeholder="formacao" value="" class="form-formacao obrigatorio">
                <span class="mensagem"></span>
                <br>

              </div>


              <!-- -------------------------------------------- -->

              <label></label><br>
              <input type="password" maxlength = "50" minlength = "7" name="senha" placeholder="Senha" value="">
              <span class="mensagem"></span>
              <br>

              <label></label><br>
              <input type="password" maxlength = "50" minlength = "7" name="csenha" placeholder="Confirmar senha" value="" class="form-senha obrigatorio">
              <span class="mensagem"></span>
              <br>

              <!-- Colocar validação -->

              <button type="submit" class="mt-3 btn btn-info" name="">Salvar</button>


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

  <script type="text/javascript">
    $(document).ready(function(){

      // Criar um evento par quando alterar o valor do selects
      $("#funcao").change(function(){

        // receber o valor atual
        var atual = $(this).val();

        if(atual == "1" ){

          $("#aluno").hide();
          $("#servidor").show();

        } else if(atual == "2"){
          $("#servidor").hide();
          $("#aluno").show();

        } else {
          $("#servidor").hide();
          $("#aluno").hide();


        }

      });

    });
  </script>

  </body>
</html>
