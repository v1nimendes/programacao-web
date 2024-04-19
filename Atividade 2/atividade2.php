<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> Exercício complementar em matrizes </h1>

<?php

  if(isset($_POST['enviar'])){

    $chassi1 = $_POST['chassi1'];
    $chassi2 = $_POST['chassi2'];
    $chassi3 = $_POST['chassi3'];

    $marca1 = $_POST['marca1'];
    $marca2 = $_POST['marca2'];
    $marca3 = $_POST['marca3'];

    $preco1 = $_POST['preco1'];
    $preco2 = $_POST['preco2'];
    $preco3 = $_POST['preco3'];

    $matrizVeiculos =[$chassi1 => [$marca1, $preco1],
                      $chassi2 => [$marca2, $preco2],
                      $chassi3 => [$marca3, $preco3]];

   echo "<table> 
    <caption> Infromações dos veículos </caption>
    <tr>
      <th> Número do chassi </th>
      <th> Nome da marca </th>
      <th> Preço de venda </th>
    </tr>";

   foreach($matrizVeiculos as $chassi => $vetorInterno){

    $precoVenda = $vetorInterno[1];
    $precoFormatado = number_format($precoVenda, 2, ",", ".");
    $marca = $vetorInterno[0];
  
     echo "<tr>
            <td> $chassi </td>
            <td> $vetorInterno[0] </td>
            <td> $vetorInterno[1] </td>
          </tr>";
   }
   echo "</table>";

   $marcaFiat = array("Fiat");

   $fabricanteFiat = ('Fiat');

   $count = 0;  
    foreach($matrizVeiculos as $chassi => $vetorInterno)
    {
      if($vetorInterno[0] == $fabricanteFiat) 
      {
        $count++;
      }
    }
    
   echo "<p> Foi encotrado <span> $count </span> carro da marca <span> $fabricanteFiat </span> </p>";

   $soma = 0;
   foreach($matrizVeiculos as $marca => $vetorInterno)
   {
    $soma = $soma + $vetorInterno[1];
   }

   $media = $soma/count($matrizVeiculos);
   $mediaFormatada = number_format($media, 2, ",", ".");

   echo"<p> O preço medio de venda dos carros é: <span> $mediaFormatada</span> </p>";
  }

  ?>