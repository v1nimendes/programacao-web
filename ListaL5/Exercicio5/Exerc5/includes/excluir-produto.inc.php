<?php
 $validade = $conexao->escape_string(trim($_POST['cadastrarMedicamento']));

 $sql = "DELETE FROM $nomeDaTabela WHERE validade > '2023-10-01'";

 $conexao->query($sql) or die($conexao->error);

 //testamos se algum registro foi apagado
 if($conexao->affected_rows > 0)
  {
  echo "<p> Prezado usuário, foram apagados um total de <span> $conexao->affected_rows produtos </span> do banco de dados.</p>";
  }
 else
  {
  echo "<p> Prezado usuário, nenhum produto foi apagado do banco de dados, pois todos eles estão dentro do prazo de validade. </p>";
  }

 
