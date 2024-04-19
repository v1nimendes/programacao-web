<?php
 $orcamento = $conexao->escape_string(trim($_POST['orcamento']));
 $horas     = $conexao->escape_string(trim($_POST['hora']));

 $sql = "DELETE FROM $nomeDaTabela WHERE orcamento < 1000 AND horas < 100";

 $conexao->query($sql) or die($conexao->error);

 //testamos se algum registro foi apagado
 if($conexao->affected_rows > 0)
  {
  echo "<p> Prezado usuário, foram apagados um total de <span> $conexao->affected_rows informações </span> do banco de dados.</p>";
  }
 else
  {
  echo "<p> Prezado usuário, nenhum produto foi apagado do banco de dados. </p>";
  }

 
