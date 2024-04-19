<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 5 - Aplicativo PHP para conversão de dólares </h1>

  <?php
   define("TAXA_CAMBIO", 5.23);

   $quantiaDolares = $_POST["quantos-dolares"];

   //cálculo do valor final da conversão em reais
   $quantosReais = $quantiaDolares * TAXA_CAMBIO;

   //formatação dos valores numéricos de saída
   $quantiaDolaresFormatada = number_format($quantiaDolares, 2, ",", ".");
   $quantiaReaisFormatada = number_format($quantosReais, 2, ",", ".");

   echo "<p> Resultado da conversão de câmbio: <br>
         Quantidade de dólares a ser convertida = <span> $$quantiaDolaresFormatada <span> <br>
         Quantidade de reais obtida = <span> R$$quantiaReaisFormatada </span> <br>
         Valor da taxa de câmbio = <span>",  TAXA_CAMBIO, "</span> </p>";

   //ATENÇÃO: sempre que usarmos uma constante e quisermos que o script devolva o valor desta constante ao usuário, ela deve estar fora do comando echo, isto é, deve estar separada por vírgulas, fora das aspas.
   ?>
</body>
</html>