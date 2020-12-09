<?php  include('./conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <script defer src="./Js/jquery-3.3.1.min.js"></script>
    <script defer src="./Js/script.js"></script>
    <link rel="stylesheet" href="./Css/style.css" />
    <link rel="stylesheet" href="./Css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
  </head>
        <body style="background-color:#cfcfcf;">

        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="Login_Part">
                    <div class="Itens_base">
                        <img src="./MML.png" class="img" />
                        <form action="cadastrar.php" method="post" class="form">
                        <div class="form-group">
                            <div class="Item_Pic">
                            <div class="row">
                                <div class="col-12">
                                <h2 class="title3">Cadastrar Conta</h2>
                                </div>
                            </div>
                            <label for="email" class="title2">Nome</label>
                            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Insira seu login"/>

                            <label for="email" class="title2 mt-3">Usuário</label>
                            <input type="text" class="form-control" name="login" aria-describedby="emailHelp" placeholder="Insira seu login"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="Item_Pic">
                            <label for="password" class="title2 mt-2">Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Insira sua senha"/>
                            </div>
                        </div>

                        <label for="password" class="title2">Confirmar</label>
                            <input type="password" class="form-control" name="passwordconf" placeholder="Repita a senha"/>
                            
                        <label for="password" class="title2 mt-3">Idade</label>
                            <input type="number" class="form-control" name="idade" placeholder="Selecione sua idade"/>

                        <input type="submit" class="btn btn-success btn-block mt-3" name="Cadastrar"  value="Cadastrar">               
                        </form>
                    </div>
                    </div>
                </div>
            </div>'

        </body>
</html>

<?php


   

    if($_POST)
    {
       $nome = $_POST['nome'];
       $login = $_POST['login'];
       $senha = $_POST['password'];
       $senha_confir = $_POST['passwordconf'];
       $idade = $_POST['idade'];
      /* $usuarios = todos_os_usuarios();
       while($e = $usuarios->fetch_array()){*/
           if($senha != $senha_confir){

            alert('Senhas não batem');

           }
          /* else if($login == $e['nm_login']){

           alert ('esse login já esta sendo utilizado');

           }*/
           else{

            cadastrar_usuario($nome, $login, $senha, $idade);
            echo "<script>window.location.href='index.php';</script>";

           }
       ;
    
         
    }

      

?>
