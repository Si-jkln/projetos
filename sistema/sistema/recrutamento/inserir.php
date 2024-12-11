<?php
  
    include "../conexao.php";

    $nome = $_REQUEST['nome'];
    $contato = $_REQUEST['contato'];
    $email = $_REQUEST['email'];
    $data_entrevista = $_REQUEST['data_entrevista'];
    $tipo = $_REQUEST['tipo'];
    $obs = $_REQUEST['obs'];
    $hora_inicio = $_REQUEST['hora_inicio'];
    $hora_fim = $_REQUEST['hora_fim'];

    //script para salvar pdf
    $localSalvamentoPasta = '../curriculos/'; /* acessa a pasta onde estão os curriculos */
    $localAcessoBanco = 'curriculos/'; /* acessa o banco  */

    /* criar o caminho para salvar o arquivo na pasta  */
    $localEnvioPasta = $localSalvamentoPasta.basename($_FILES['curriculo']['name']);
    $localEnvioParaBanco = $localAcessoBanco.basename($_FILES['curriculo']['name']);

    /* mover para pasta */
    move_uploaded_file($_FILES['curriculo']['tmp_name'], $localEnvioPasta);

    //script para salvar foto
    if($pasta_img . ($_FILES["foto"]["name"]) != null) {

    // Pasta de destino para uploads (usando caminho relativo)
    $fotoBanco = "./imgs/";

    // Caminho absoluto para a pasta de upload
    $pasta_img = "../imgs/";
    $target_file = $pasta_img . basename($_FILES["foto"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar se o arquivo é uma foto real
    $check = getimagesize($_FILES["foto"]["tmp_name"]);

    if($check === false) {
        die("O arquivo não é uma foto.");
    }
  
    // Verificar o tamanho do arquivo
    if ($_FILES["foto"]["size"] > 500000) {
        die("Desculpe, o arquivo é muito grande.");
    }

    // Permitir certos formatos de arquivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        die("Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos.");
    }

    // Tentar fazer o upload do arquivo
    if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        die("Desculpe, ocorreu um erro ao fazer o upload do seu arquivo.");
    }

    // Caminho relativo para salvar no banco de dados
    $imgBanco = $fotoBanco . basename($_FILES["foto"]["name"]);
    }

   $sql = "INSERT INTO recrutamento(nome, contato, email, data_entrevista, tipo, obs, curriculo, foto, hora_inicio, hora_fim) 
   VALUES ('$nome', '$contato', '$email', '$data_entrevista', '$tipo', '$obs', '$localEnvioParaBanco', '$imgBanco', '$hora_inicio', '$hora_fim')";
   //executar sql
   $resultado = mysqli_query($conexao, $sql);

   //manda a pessoa para a página inicial
   header("location:../recrutamento.php");
   

?>