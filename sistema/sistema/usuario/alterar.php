<?php
    include '../conexao.php';

    //rcebeno requisições do front-end e armazenar valores em variaveis
    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    $sql = "UPDATE usuario SET nome='$nome', cpf='$cpf', senha='$senha' WHERE id='$id'";

    //executar sql
    $resultado = mysqli_query($conexao, $sql);

    //votar para tela inicial
    header("location:../principal.php");


?>