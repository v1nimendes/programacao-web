<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 1 - Matrizes em PHP </h1>

  <?php
  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];

  $matric1 = $_POST['matric1'];
  $matric2 = $_POST['matric2'];
  $matric3 = $_POST['matric3'];

  $media1 = $_POST['media1'];
  $media2 = $_POST['media2'];
  $media3 = $_POST['media3'];

  //a partir das 9 variáveis simples, vamos montar a matriz em PHP
  $matrizAlunos = [$matric1 => [$nome1, $media1],
                   $matric2 => [$nome2, $media2],
                   $matric3 => [$nome3, $media3]];

  /*outra possibilidade de armazenar os mesmos dados na matriz
  $matrizAlunos = [[$nome1, $media1, $matric1],
                   [$nome2, $media2, $matric2],
                   [$nome3, $media3, $matric3]];*/

  echo "<table>
         <caption> Relatório do desempenho dos alunos da segunda fase do CTDS em PRW </caption>
         <tr>
          <th> Matrícula do aluno </th>
          <th> Nome do aluno </th>
          <th> Média final de PRW </th>
         </tr>";

  //percorrendo toda a matriz com o laço foreach, a fim de que o PHP envie ao navegador os dados que irão montar o corpo da tabela
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
    echo "<tr>
           <td> $matric </td>
           <td> $vetorInterno[0] </td>
           <td> $vetorInterno[1] </td>
          </tr>";
   }
  echo "</table>";
 ?>
</body>
</html>