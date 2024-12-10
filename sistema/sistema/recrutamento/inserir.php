<?php
  
    include "../conexao.php";

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

  
        $localSalvamentoPasta = '../curriculos/'; /* acessa a pasta onde estão os curriculos */
        $localAcessoBanco = 'curriculos/'; /* acessa o banco  */

        /* criar o caminho para salvar o arquivo na pasta  */
        $localEnvioPasta = $localSalvamentoPasta.basename($_FILES['curriculo']['name']);
        $localEnvioParaBanco = $localAcessoBanco.basename($_FILES['curriculo']['name']);

        /* mover para pasta */
        move_uploaded_file($_FILES['curriculo']['tmp_name'], $localEnvioPasta);




   $sql = "INSERT INTO recrutamento(nome, contato, email, data_entrevista, tipo, obs, curriculo, foto, hora_inicio, hora_fim) 
   VALUES ('$nome', '$contato', '$email', '$data_entrevista', '$tipo', '$obs', '$localEnvioParaBanco', '$foto', '$hora_inicio', '$hora_fim')";
   //executar sql
   $resultado = mysqli_query($conexao, $sql);

   //manda a pessoa para a página inicial
   header("location:../recrutamento.php");
   

?>