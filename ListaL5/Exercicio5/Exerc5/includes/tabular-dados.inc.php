<?php
 $sql = "SELECT * FROM $nomeDaTabela";

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
         <caption> Relação de medicamentos cadastrados </caption>
         <tr>
          <th> Id </th>
          <th> Nome do medicamento </th>
          <th> Preçõ do medicamento </th>
          <th> Data de validade </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   //usamos o comando abaixo para impedirmos a invasão da máquina cliente com o ataque conehcido como XSS
   $id           = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $Medicamento  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $preco        = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
   $validade     = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

   echo "<tr>
          <td> $id </td>
          <td> $Medicamento </td>
          <td> $preco </td>
          <td> $validade </td>
         </tr>";
   }
  echo "</table>";
  }