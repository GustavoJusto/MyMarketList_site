<?php

include('./conexao.php');


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
                        <form action="index.php" method="POST" class="form">
                        <div class="form-group">
                            <div class="Item_Pic">
                            <div class="row">
                                <div class="col-12">
                                <h2 class="title3">My Market List</h2>
                                </div>
                            </div>
                            <label for="email" class="title2">Usuário</label>
                            <input type="text" class="form-control" name="login" aria-describedby="emailHelp" placeholder="Insira seu login"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="Item_Pic">
                            <label for="password" class="title2">Senha</label>
                            <input
                                type="password" class="form-control" name="password" placeholder="Insira sua senha"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8 offset-4">
                            <a href="cadastrar.php" class="create">Cadastrar</a>
                            </div>
                    </div>
                        <input type="submit" class="btn btn-success btn-block" name="Login" id="Login" value="Entrar">               
                        
                    </div>
                    </div>
                </div>
                </div>
</form>
<?php

    if(isset($_POST['Login']))
    {

        $login = $_POST['login'];
        $senha = $_POST['password'];
 

       $validacao =  todos_os_usuarios();
       while($e = $validacao->fetch_array()){

        if( $e['nm_login'] == $login ){

            alert('login efetuado com sucesso');
            echo "<script>window.location.href='home.php';</script>";


        }
        else{

            alert('falha ao efetuar o login tente novamente');

        }

       }

    }

?>

        </body>
        
</html>

