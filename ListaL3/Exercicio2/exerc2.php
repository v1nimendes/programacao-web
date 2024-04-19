<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 2 - Matrizes em PHP </h1>

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

  //calcular a média de notas dos alunos da turma
  $soma = 0;

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $soma = $soma + $vetorInterno[1];
   }

  $media = $soma/count($matrizAlunos);
  $mediaFormatada = number_format($media, 1, ",", ".");
  echo "<p> De acordo com os dados cadastrados na matriz, a média geral da turma em PRW é <span> $mediaFormatada </span> </p>";
 ?>
</body>
</html>