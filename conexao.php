<?php

$serv = "localhost";
    $user = "root";
    $senha = "usbw";
    $banco = "db_market_list";

    $conexao = new mysqli($serv,$user,$senha,$banco);
    $conexao->query("SET NAMES 'utf8'");
    $conexao->query('SET character_set_connection=utf8');
    $conexao->query('SET character_set_client=utf8');
    $conexao->query('SET character_set_results=utf8');

    if(!$conexao){
        echo"Erro ao conectar com o banco".$conexao->error;
    }


//funções

//utilitarias

function alert($alert){

    echo'<script>alert("'.$alert.'");</script>';

}

function oi(){
    echo 'entro';
}


//cadastrar e login
    function cadastrar_usuario($nome, $login, $senha, $idade){

            $sql = 'INSERT INTO tb_usuario VALUE(NULL, "'.$nome.'", "'.$login.'", "'.$senha.'", '.$idade.', NULL);';
            $res = $GLOBALS['conexao']->query($sql);
            if($res){

                alert('cadastro de usuario efetuado com sucesso');

            }

            else{

            alert('falha ao cadastrar');

            }

        }


//todos os usuarios
  
    function todos_os_usuarios(){
        $sql = 'SELECT * FROM tb_usuario';
        $res = $GLOBALS['conexao']->query($sql);
         return $res;

    }

    

    


//solicitar as listas




?>