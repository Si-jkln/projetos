<?php
/* inicial sessão */
session_start();


/* se não exister a variavel d sessão cpf ou senha, manda pro login */
/* ! inverte a  */
if (!isset($_SESSION['cpf']) or !isset($_SESSION['senha'])){
    //destruir sessão
    session_destroy();
   
    /* limpa as variaveis de sessão */
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);

    //manda login
    header('location:index.php');
}

?>

