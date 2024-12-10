<?php
  
    include "../conexao.php";

    $descricao = $_REQUEST['descricao'];
    $obs = $_REQUEST['obs'];

    //echo "Teste $nome $cpf $senha";

   $sql = "INSERT INTO profissao(descricao, obs) VALUES ('$descricao', '$obs')";
   //executar sql
   $resultado = mysqli_query($conexao, $sql);

   //manda a pessoa para a página inicial
   header("location:../profissao.php");
   

?>