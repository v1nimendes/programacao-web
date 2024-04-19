<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 3 - Matrizes em PHP </h1>

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

  //agora, vamos  criar, a partir da matriz original,  um vetor auxiliar armazenando a média de PRW e a matrícula de cada aluno cadastrado
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   //criando o vetor auxiliar a partir da matriz
   $vetorAux[$matric] = $vetorInterno[1];
   }

  //agora, usamos a função max sobre o vetor auxiliar para descobrirmos a maior média dentro do vetor
  $maiorMedia = max($vetorAux);

  //em seguida, usamos a função array_search para que o PHP encontre e traga, do vetor auxiliar, a matrícula do aluno com a maior média de PRW
  $matricAlunoMaiorMedia = array_search($maiorMedia, $vetorAux);

  //por último, vamos até a matriz e recuperamos o nome do aluno com maior média. Já temos a matrícula dele e o valor da própria média
  $alunoMaiorMedia = $matrizAlunos[$matricAlunoMaiorMedia][0];

  echo "<p> Dados do aluno com a maior média em PRW: <br>
            Maior média = <span> $maiorMedia </span> <br>
            Matrícula   = <span> $matricAlunoMaiorMedia </span> <br>
            Nome do aluno = <span> $alunoMaiorMedia </span> </p>";

  //mostrando os dados do melhor aluno no formato tabular
  echo "<table>
         <caption> Dados do melhor aluno da turma </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média final de PRW </td>
         </tr>
         
         <tr>
          <td> $matricAlunoMaiorMedia </td>
          <td> $alunoMaiorMedia </td>
          <td> $maiorMedia </td>
         </tr>
        </table>";
  ?>
</body>
</html>