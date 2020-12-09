<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Market List</title>
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

        <style>
          .title_Bar 
            {
                color: white;
                font-size: 25px;
                background-color: #44b644;
            }

          .Tool_Bar 
            {
                font-size: 15px;
                background-color: #5fe45f;
                margin-left: 8%;
            }

            .Line 
              {
                border-bottom-style: solid;
                border-color: #44b644;
                border-radius: 0px;
              }
        </style>

            <div class="container-fluid">
            <div class="row">
                <div class="col-12 title_Bar"><a href="home.php"><font color=white>My Market List</font></a></div>
                <div class="col-10 Tool_Bar"><a href="cadastrar.php"><font color=white>Cadastrar</font></a>-<a href="conta.php"><font color=white>Minha Conta</font></a>-<a href="index.php"><font color=white>Sair</font></a></div>
            </div>

            <div class="row justify-content-center">
                    <div class="Login_Part">
                    <div class="Itens_base">
                    <form action="index.php" method="POST" class="form" style="margin-left:-180px;">
                        <div class="form-group">
                            <div class="Item_Pic">
                            <div class="row">
                                <div class="col-12">
                                <h2 class="title3">Minha Conta</h2>
                                </div>
                            </div>
                            <img src="conta.png" class="offset-2"><br>
                            <label class="mt-3 offset-1">Nome: Gustavo Justo</label><br>
                            <label class=" offset-1">Login: Justo02</label><br>
                            <label class=" offset-1">Idade: 16</label><br>
                            <label class=" offset-1">Numero de Listas: 0</label><br>

                        </form>
                    </div>
                    </div>
                </div>


            </div>


        </body>
</html>