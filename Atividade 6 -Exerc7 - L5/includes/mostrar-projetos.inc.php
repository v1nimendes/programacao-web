<?php
 $dataInicio = $conexao->escape_string(trim($_POST['mostrar']));


 $sql = "SELECT dataInicio FROM $nomeDaTabela WHERE dataInicio > '2020-01-01'";

 $conexao->query($sql) or die($conexao->error);

 //testamos se algum registro foi apagado
 if($conexao->affected_rows > 0)
  {
  echo "<p> Prezado usuário, foram encontrados um total de <span> $conexao->affected_rows Projetos </span> com data de inicio postetior a 01/01/2020.</p>";
  }
 else
  {
  echo "<p> Prezado usuário, nenhum projeto foi apagado do banco de dados. </p>";
  }

 
