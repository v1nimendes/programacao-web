<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 2 - vetores em PHP </h1>

  <?php
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST['aluno1'];
  $nome2 = $_POST['aluno2'];
  $nome3 = $_POST['aluno3'];

  //criar o vetor com índice associativo. O nome de cada aluno será o endereço de memória e a nota de cada aluno será o conteúdo dentro das células do vetor
  $vetorNotas = [$nome1 => $nota1,
                 $nome2 => $nota2,
                 $nome3 => $nota3];

  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //fazendo o PHP percorrer o vetor e montar uma tabela na página web com os dados retirados deste vetor
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

  //nesta parte do código, o PHP deve mostrar o nome do aluno e sua nota, mas somente daquele aluno que teve a maior nota registrada no vetor

  $maiorNota = max($vetorNotas);

  //agora que já sabemos qual a maior nota cadastrada no vetor, vamos pedir ao PHP para localizar a célula com a maior nota e devolver o índice desta célula, que é o nome do respectivo aluno
  $alunoComMaiorNota = array_search($maiorNota, $vetorNotas);

  echo "<p> De acordo com as notas e alunos cadastrados no vetor,temos os seguintes resultados: <br>
        Aluno com maior nota = <span> $alunoComMaiorNota </span> <br>
        Nota deste aluno = <span> $maiorNota </span> </p>";
  ?>
</body>
</html>