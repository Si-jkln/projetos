<?php

    /* importando o banco de dados */
    include 'conexao.php';

    /* recebendo dados da tela de login(front) por requisição */
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    echo "Seu cpf é: $cpf </br> Sua senha é: $senha";

    /* consultar o cpf e senha no banco de dados */
    $sql = "SELECT * FROM usuario WHERE cpf= '$cpf' AND senha ='$senha' ";

    /* executa o código SQL com a permissão da conexão */
    $resultado = mysqli_query($conexao, $sql);

    /* cada valor é associado ao nome da coluna no banco */
    $colunas = mysqli_fetch_assoc($resultado);

    /* se o número buscado no banco for maior que zero */
    if(mysqli_num_rows($resultado) > 0){
        
        //inciar sessão 
        session_start();

          /* cria variavesi de sessão usuario, cpf e senha */
        $_SESSION["usuario"] = $colunas["nome"];
        $_SESSION["cpf"] = $cpf;
        $_SESSION["senha"] = $senha;

        /* direciona para pagina do sistema */
        header('location: principal.php');

    }else{
        /* destroi sessão */
        session_unset();
        session_destroy();


        echo "Login errado";
        header("location: index.php");
    }

?>
