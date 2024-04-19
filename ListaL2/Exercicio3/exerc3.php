<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 3 - vetores em PHP </h1>

  <?php
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST['aluno1'];
  $nome2 = $_POST['aluno2'];
  $nome3 = $_POST['aluno3'];

  //criar o vetor com índice associativo. O nome de cada aluno será o endereço de memória e a nota de cada aluno será o conteúdo dentro das células do vetor
  $vetorNotas = array($nome1 => $nota1,
                 $nome2 => $nota2,
                 $nome3 => $nota3);

  //precisamos ordenar o vetor pelo conteúdo, mantendo a associação entre nota e aluno, em ordem decrescente. A função correta de ordenação está abaixo
  arsort($vetorNotas);

  echo "<table>
         <tr>
           <th> Aluno </th>
           <th> Nota de PRW </th>
         </tr>";

  foreach($vetorNotas as $aluno => $nota)
   {
   echo "<tr>
          <td> $aluno </td>
          <td> $nota </td>          
         </tr>";
   }
  echo "</table>";
 ?>
</body>
</html>