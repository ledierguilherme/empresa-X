<?php

    //INICIALIZA A SESSÃO PARA O PROCESSO DE LOGIN:
    session_start();

    //IMPORTAÇÃO DO ARQUIVO DE FUNÇÕES:
    require_once("./funcoes.php");

    //RECEBENDO OS DO FORMULÁRIO:
    if(isset($_POST["txt_usuario"]) || isset($_POST["txt_senha"])){

        $usuario = $_POST["txt_usuario"];
        $senha = $_POST["txt_senha"];

        realizarLogin($usuario, $senha, lerArquivo("dados/usuarios.json"));

    }else if($_GET["logout"]){

        finalizarLogin();

    }

    

?>