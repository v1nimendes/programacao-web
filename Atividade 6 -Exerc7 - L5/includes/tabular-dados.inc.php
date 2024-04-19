<?php
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //antes de criarmos a tabela na página web para mostrar os dados dos alunos cadastrados, devemos fazer com que o PHP teste se a tabela não está vazia
 $numeroLinhasRetornadas = $conexao->affected_rows;

 if($numeroLinhasRetornadas == 0)
  {
  //tabela alunos está vazia
  echo "<p> Caro usuário, a listagem não foi mostrada porque não existe informações sobre o projeto! </p>";
  }

 else
  {
  //tabela alunos contém dados
  echo "<table>
         <caption> Informações do Projeto </caption>
         <tr>
          <th> Id </th>
          <th> Orçamento(R$) </th>
          <th> Data de Inicio </th>
          <th> Horas necessárias </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   //usamos o comando abaixo para impedirmos a invasão da máquina cliente com o ataque conehcido como XSS
   $id                = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $orcamento         = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $dataInicio        = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
   $horas             = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

   echo "<tr>
          <td> $id </td>
          <td> $orcamento </td>
          <td> $dataInicio </td>
          <td> $horas </td>
         </tr>";
   }
  echo "</table>";
  }