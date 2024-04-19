<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 7 - vetores em PHP </h1>

  <?php
  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];


  $vetorPessoas = [$nome1 => $idade1,
                   $nome2 => $idade2,
                   $nome3 => $idade3];

  //precisamos ordenar o vetor pelo nome das pessoas, mantendo a associação entre pessoa e idade, em ordem alfabética crescente do nome da pessoa (não pode aparecer a letra r no nome da função). Por último, notar que a ordenação deve ser feita no nome da pessoa (pela chave, k)
  ksort($vetorPessoas);

  echo "<table>
         <tr>
           <th> Nome </th>
           <th> Idade </th>
         </tr>";

  foreach($vetorPessoas as $nome => $idade)
   {
   echo "<tr>
          <td> $nome </td>
          <td> $idade </td>          
         </tr>";
   }
  echo "</table>";
 ?>
</body>
</html>