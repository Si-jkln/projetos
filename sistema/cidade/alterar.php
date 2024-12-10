<?php
    include '../conexao.php';

    //rcebeno requisições do front-end e armazenar valores em variaveis
    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $cep = $_REQUEST['cep'];
    $estado = $_REQUEST['estado'];

    $sql = "UPDATE cidade SET nome='$nome', cep='$cep', estado='$estado' WHERE id='$id'";

    //executar sql
    $resultado = mysqli_query($conexao, $sql);

    //votar para tela inicial
    header("location:../cidade.php");


?>