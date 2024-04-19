<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 5 - Ordenação de matrizes em PHP </h1>

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

  $matrizAlunos = [$matric1 => [$nome1, $media1],
                   $matric2 => [$nome2, $media2],
                   $matric3 => [$nome3, $media3]];

  /*echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";*/

  //para fazermos a ordenação pedida pelo exercício, devemos, antes, criar um vetor auxiliar armazenando a média de PRW de cada aluno
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorAux[$matric] = $vetorInterno[1];
   }

  //agora, vamos pegar o vetor auxiliar e fazer o PHP ordená-lo pelos seguintes critérios: ordenação pela média de PRW (não pode ter a letra k no nome da função), ordenação decrescente (tem que ter a letra r na função) e mantendo a associação entre a média de PRW e a matrícula de cada aluno (tem que ter a letra a)
  arsort($vetorAux);


  //criar o cabeçalho da tabela na página web
  echo "<table>
         <caption> Dados dos alunos ordenados pela média em PRW </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média final de PRW </th>
         </tr>";

  //vamos percorrer o vetor ordenado com um laço foreach e preencher o corpo da tabela com os dados deste vetor. O nome do aluno é retirado diretamente da matriz
  foreach($vetorAux as $matric => $media)
   {
   $mediaFormatada = number_format($media, 1, ",", ".");
   $nomeAluno = $matrizAlunos[$matric][0];

   echo "<tr>
          <td> $matric </td>
          <td> $nomeAluno </td>
          <td> $mediaFormatada </td>
          </tr>";
   }
  echo "</table>";  
 ?>
</body>
</html>