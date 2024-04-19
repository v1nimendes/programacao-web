<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 4 - Busca em matrizes em PHP </h1>

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

  //recebendo  o nome do aluno a ser pesquisado
  $alunoPesquisado = $_POST['aluno-pesquisado'];

  //agora, vamos  criar, a partir da matriz original,  um vetor auxiliar armazenando o nome e a matrícula de cada aluno cadastrado
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   //criando o vetor auxiliar a partir da matriz
   $vetorAux[$matric] = $vetorInterno[0];
   }


  //em seguida, usamos a função array_search para que o PHP encontre e traga, do vetor auxiliar, a matrícula do aluno cujo nome está sendo pesquisado
  $matricAlunoPesq = array_search($alunoPesquisado, $vetorAux);

  if($matricAlunoPesq == false)
   {
   echo "<p> O aluno <span> $alunoPesquisado </span> não foi encontrado na matriz. </p>";
   }
  else
   {
    //Se o PHP chegar aqui, já conhecemos o nome do aluno pesquisado, sua matrícula, faltando, apenas, a média final de PRW, que conseguimos acessando a matriz
    $mediaAlunoPesq = $matrizAlunos[$matricAlunoPesq][1];

    echo "<p> Dados do aluno pesquisado: <br>
          Nome = <span> $alunoPesquisado </span>
          Matrícula = <span> $matricAlunoPesq </span>
          Média final em PRW = <span> $mediaAlunoPesq </span> </p>";

   }
 ?>
</body>
</html>