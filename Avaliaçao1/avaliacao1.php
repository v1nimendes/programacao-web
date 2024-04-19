<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> Avaliação 1 </h1>

<?php

  if(isset($_POST['enviar'])){

    $ISBN1 = $_POST['ISBN1'];
    $ISBN2 = $_POST['ISBN2'];
    $ISBN3 = $_POST['ISBN3'];

    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $nome3 = $_POST['nome3'];

    $preco1 = $_POST['preco1'];
    $preco2 = $_POST['preco2'];
    $preco3 = $_POST['preco3'];

    $matrizLivros =[$ISBN1 => [$nome1, $preco1],
                      $ISBN2 => [$nome2, $preco2],
                      $ISBN3 => [$nome3, $preco3]];
  }

   echo "<table> 
    <caption> Infromações dos livros  </caption>
    <tr>
      <th> ISBN </th>
      <th> Nome do autor </th>
      <th> Preço de venda </th>
    </tr>";

   foreach($matrizLivros as $ISBN => $vetorInterno){

    $precoVenda = $vetorInterno[1];
    $precoFormatado = number_format($precoVenda, 2, ",", ".");
    $nome = $vetorInterno[0];
  
     echo "<tr>
            <td> $ISBN </td>
            <td> $vetorInterno[0] </td>
            <td> $vetorInterno[1] </td>
          </tr>";
   }
   echo "</table>";

   $nomeAutor = array("José de Alencar");

   $autorNome = ('José de Alencar');

   $count = 0;  
    foreach($matrizLivros as $ISBN => $vetorInterno)
    {
      if($vetorInterno[0] == $autorNome) 
      {
        $count++;
      }
    }
    
   echo "<p> Foi encotrado <span> $count </span> livros do autor <span> $autorNome </span> </p>";


  foreach($matrizLivros as $ISBN => $vetorInterno)
  {
    $vetorAux[$ISBN] = $vetorInterno[1];
  }

  $menorPreco = min($vetorAux);
  
  $ISBNlivro = array_search($menorPreco, $vetorAux);

  $livroMenorPreco = $matrizLivros[$ISBNlivro][0];

  echo"<p> Dados do livro com menor preço: <br> 
  Nome do autor = $livroMenorPreco </span> <br>
  Preço de venda = R$<span> $menorPreco </span> <br>
  ISBN = <span> $ISBNlivro </span> </p>";

  ?>