<?php 

    include '../conexao.php';

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM profissao WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header('location:../profissao.php');
                                                                
?>