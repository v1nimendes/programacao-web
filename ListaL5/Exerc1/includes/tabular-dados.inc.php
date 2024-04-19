<?php
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //antes de criarmos a tabela na página web para mostrar os dados dos alunos cadastrados, devemos fazer com que o PHP teste se a tabela não está vazia
 $numeroLinhasRetornadas = $conexao->affected_rows;

 if($numeroLinhasRetornadas == 0)
  {
  //tabela alunos está vazia
  echo "<p> Caro usuário, a listagem não foi mostrada porque a tabela de alunos está vazia! </p>";
  }

 else
  {
  //tabela alunos contém dados
  echo "<table>
         <caption> Relação de alunos cadastrados </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média de PRW </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   //usamos o comando abaixo para impedirmos a invasão da máquina cliente com o ataque conehcido como XSS
   $matric = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $aluno  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $media  = htmlentities($registro[2], ENT_QUOTES, "UTF-8");

   echo "<tr>
          <td> $matric </td>
          <td> $aluno </td>
          <td> $media </td>
         </tr>";
   }
  echo "</table>";
  }