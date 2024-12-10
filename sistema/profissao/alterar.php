<?php
    include '../conexao.php';

    //rcebeno requisições do front-end e armazenar valores em variaveis
    $id = $_REQUEST['id'];   
    $descricao = $_REQUEST['descricao'];
    $obs = $_REQUEST['obs'];

    $sql = "UPDATE profissao SET descricao='$descricao', obs='$obs' WHERE id='$id'";

    //executar sql
    $resultado = mysqli_query($conexao, $sql);

    //votar para tela inicial
    header("location:../profissao.php");


?>