<?php
    include '../conexao.php';

    //rcebeno requisições do front-end e armazenar valores em variaveis
    $id = $_REQUEST['id'];   
   
    $nome = $_REQUEST['nome'];
    $salario = $_REQUEST['salario'];
    $data_nascimento= $_REQUEST['data_nascimento'];
    $cpf = $_REQUEST['cpf'];
    $cidade = $_REQUEST['cidade'];
    $profissao = $_REQUEST['profissao'];
    $status = $_REQUEST['status'];
    $contato = $_REQUEST['contato'];
    $endereco = $_REQUEST['endereco'];
    $data_contratacao = $_REQUEST['data_contratacao'];

    $sql = "UPDATE funcionario SET nome='$nome', salario='$salario', data_nascimento='$data_nascimento', cpf='$cpf', cidade='$cidade', profissao='$profissao', status='$status', contato='$contato', endereco='$endereco', data_contratacao='$data_contratacao' WHERE id='$id'";

    //executar sql
    $resultado = mysqli_query($conexao, $sql);

    //votar para tela inicial
    header("location:../funcionario.php");


?>