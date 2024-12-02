<!DOCTYPE html>
<html lang="pr-br">
<?php

include "validacao.php";
include "conexao.php";

//destino do formulário
$destino = './usuario/inserir.php';

//se variavel idAlt for diferente de vazio na url -  se existir a variavel idAlt na URL
if (!empty($_GET['idAlt'])) {
  $id = $_GET['idAlt'];
  $sql = "SELECT * FROM usuario WHERE id='$id' ";

  //busca os usuario para editar de acordo com o id
  $dados = mysqli_query($conexao, $sql);

  //separa os dados po coluna, pronto para uso
  $dadosAlt = mysqli_fetch_assoc($dados);

  //nessecaso o formulario vei enviar os dados para o alterar.php
  $destino = './usuario/alterar.php';


}


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
<?php include './menuSuperior.php';?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 menu">

       <?php include './menuLateral.php'; ?>
       
      </div>


      <div class="col-md-10">

        <div class="row">

          <div class="col-md-4 card">
            <h3>Cadastro</h3>

            <form action="<?= $destino ?>" method="post">

              <div class="form-group">
                <label>ID: </label>
                <input readonly value="<?php echo isset($dadosAlt) ? $dadosAlt['id'] : '' ?>" type="text" name="id"
                  class="form-control" placeholder="Seu ID">
              </div>

              <div class="form-group">
                <label>Nome: </label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['nome'] : '' ?>" type="text" name="nome" required
                  class="form-control" placeholder="Seu Nome">
              </div>

              <div class="form-group">
                <label>CPF: </label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['cpf'] : '' ?>" type="text" name="cpf" required
                  class="form-control cpf" placeholder="CPF">
              </div>

              <div class="form-group">
                <label>Senha: </label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['senha'] : '' ?>" type="password" name="senha"
                  required class="form-control" placeholder="Senha">
              </div>

              <button type="submit" class="btn btn-outline-info color"> Salvar </button>
            </form>

          </div>

          <div class="col-md-7 card">
            <table class="table table-striped table-bordered" id="tabela">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">CPF</th>
                  <th scope="col">Opções</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $sql = 'SELECT * FROM usuario';
                $resultado = mysqli_query($conexao, $sql);

                //looping que vai imprimar cada pessoa na tabela
                while ($colunas = mysqli_fetch_assoc($resultado)) {

                  ?>

                  <tr>
                    <th scope="row"> <?php echo $colunas['id'] ?> </th>
                    <td> <?php echo $colunas['nome'] ?></td>
                    <td> <?php echo $colunas['cpf'] ?></td>
                    <td>
                      <a href="principal.php?idAlt=<?= $colunas['id'] ?>"> <i class="fa-solid fa-pencil mr-3"
                          style="color: #07414d;"></i></a>
                      <a href="<?php echo './usuario/excluir.php?id=' . $colunas['id']; ?>"> <i
                          class="fa-solid fa-trash-can" style="color: #970707;"></i></a>
                    </td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
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
</body>

</html>