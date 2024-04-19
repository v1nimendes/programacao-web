<?php
 $nome = $conexao->escape_string(trim($_POST['nome']));
 $estado = $conexao->escape_string(trim($_POST['estado']));
 $campeao = $conexao->escape_string(trim($_POST['campeao']));
 $tricampeao = $conexao->escape_string(trim($_POST['tabular']));
 
 $sql = "SELECT * FROM $nomeDaTabela WHERE campeao = 3";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //antes de criarmos a tabela na página web para mostrar os dados dos alunos cadastrados, devemos fazer com que o PHP teste se a tabela não está vazia
 $numeroLinhasRetornadas = $conexao->affected_rows;

 if($numeroLinhasRetornadas == 0)
  {
  //tabela alunos está vazia
  echo "<p> Caro usuário, a listagem não foi mostrada porque a tabela de medicamentos está vazia! </p>";
  }

 else
  {
  //tabela alunos contém dados
  echo "<table>
         <caption> Clubes </caption>
         <tr>
          <th> Id </th>
          <th> Nome do clube </th>
          <th> Estado </th>
          <th> Titulos </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   //usamos o comando abaixo para impedirmos a invasão da máquina cliente com o ataque conehcido como XSS
   $id           = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $nome  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $estado        = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
   $campeao     = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

   echo "<tr>
          <td> $id </td>
          <td> $nome </td>
          <td> $estado </td>
          <td> $campeao </td>
         </tr>";
   }
  echo "</table>";
  }