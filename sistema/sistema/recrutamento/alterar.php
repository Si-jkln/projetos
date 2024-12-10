<?php
    include '../conexao.php';

    //rcebeno requisições do front-end e armazenar valores em variaveis
    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $contato = $_REQUEST['contato'];
    $email = $_REQUEST['email'];
    $data_entrevista = $_REQUEST['data_entrevista'];
    $tipo = $_REQUEST['tipo'];
    $obs = $_REQUEST['obs'];
    $curriculo = $_REQUEST['curriculo'];
    $foto = $_REQUEST['foto'];
    $hora_inicio = $_REQUEST['hora_inicio'];
    $hora_fim = $_REQUEST['hora_fim'];

    $sql = "UPDATE recrutamento SET nome='$nome', contato='$contato', email='$email', data_entrevista='$data_entrevista', 
    tipo='$tipo', obs='$obs', curriculo='$curriculo', foto='$foto', hora_inicio='$hora_inicio', hora_fim='$hora_fim' 
    WHERE id='$id'";

    //executar sql
    $resultado = mysqli_query($conexao, $sql);

    //votar para tela inicial
    header("location:../recrutamento.php");


?>