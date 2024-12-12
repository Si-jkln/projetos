<!DOCTYPE html>
<html lang="pr-br">
<?php

include "validacao.php";
include "conexao.php";

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sistema </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./recursos/style.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

</head>

<body>
  <?php include './menuSuperior.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 menu">
        <?php include './menuLateral.php'; ?>
      </div>

      <div class="col-md-10">

        <div class="row">
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#d30e0e; color:white;"><h4>Teste Técnico</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:darkgreen; color:white;"><h4>Teste Comportamental</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:darkblue; color:white;"><h4>Teste Psicológico</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#94074d; color:white;"><h4>Dinâmica em grupos</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#39074d; color:white;"><h4>Aprovação e Integração</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:darkred; color:white;"><h4>Admissão e Demissão</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#0c9736; color:white;"><h4>Folha Salarial</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#3676be; color:white;"><h4>Contrato Empregatício</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#743670; color:white;"><h4>Controle de Ponto</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#000000; color:white;"><h4>Benefício</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:#743636; color:white;"><h4>Compliance</h4></div>
          <div class="col-md-2 card p-5 text-center h-5" style="background-color:yellowgreen; color:white;"><h4>Férias</h4></div>
        </div>
      </div>
    </div>


    <!-- importação boostrap: js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <!-- importação boostrap: js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/    F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
      integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script src="./recursos/script.js"></script>

  </div>  
</body>

</html>