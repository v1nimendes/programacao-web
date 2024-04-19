<?php
 $sql = "SELECT * FROM $nomeDaTabela WHERE
 classificacao = 'Perecível' ORDER BY estoque DESC";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //antes de criarmos a tabela na página web para mostrar os dados dos alunos cadastrados, devemos fazer com que o PHP teste se a tabela não está vazia
 $numeroLinhasRetornadas = $conexao->affected_rows;

 if($numeroLinhasRetornadas == 0)
  {
  //tabela alunos está vazia
  echo "<p> Caro usuário, a listagem não foi mostrada porque a tabela de produtos está vazia ou porque nenhum produto perecível foi cadastrado! </p>";
  }

 else
  {
  //tabela alunos contém dados
  echo "<table>
         <caption> Relação de produtos perecíveis cadastrado, ordenados decrescentemente pela quantidade em estoque </caption>
         <tr>
          <th> ID </th>
          <th> Preço </th>
          <th>  Estoque </th>
          <th>  Classificação </th>
          <th>  Descrição </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   //usamos o comando abaixo para impedirmos a invasão da máquina cliente com o ataque conehcido como XSS
   $id = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $preco  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $estoque  = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
   $classific  = htmlentities($registro[3], ENT_QUOTES, "UTF-8");
   $descricao  = htmlentities($registro[4], ENT_QUOTES, "UTF-8");

   $precoFormatado = number_format($preco, 2, ",", ".");
   echo "<tr>
          <td> $id </td>
          <td> $precoFormatado </td>
          <td> $estoque </td>
          <td> $classific </td>
          <td> $descricao </td>
         </tr>";
   }
  echo "</table>";
  }