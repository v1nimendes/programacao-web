<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 1 - vetores em PHP </h1>

  <?php
  //recebemos os dados do formulário e guardamos em três variáveis escalares
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  //passo seguinte é criar o vetor a partir das três variáveis acima
  $vetorNotas = [$nota1, $nota2, $nota3];

  //fazendo o PHP mostrar a estrutura e o conteúdo do vetor na página web
  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //calculando a média de nota dos 3 alunos
  $soma = array_sum($vetorNotas);

  $media = $soma / count($vetorNotas);

  echo "<p> A média das notas de PRW dos três alunos é igual a <span> $media </span> </p>";
  ?>
</body>
</html>