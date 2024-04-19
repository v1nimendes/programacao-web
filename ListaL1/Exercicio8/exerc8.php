<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 8 - Supermercados AAA - vendas com PHP </h1>

  <?php
   define("DESCONTO", 5/100);
   define("ACRESCIMO", 2/100);

   $valorCompra = $_POST['valor-compra'];

   //testando se o checkbox da compra com cartão foi marcado
   $desconto = 0;   
   if(isset($_POST['forma-pagamento']))
    {
    $desconto = $valorCompra * DESCONTO;
    }

   //testando se o checkbox da entraga a domicílio foi marcado
   $acrescimo = 0;
   if(isset($_POST['forma-entrega']))
    {
    $acrescimo = $valorCompra * ACRESCIMO;
    }

   $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

   //formatando os valores numéricos e escrevendo os resultados

   $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  $descontoFormatado = number_format($desconto, 2, ",", ".");
  $acrescimoFormatado = number_format($acrescimo, 2, ",", ".");

  echo "<p> Resultado da compra: <br>
       Valor inicial da compra = <span> R$$valorCompraFormatado </span> <br>
       Valor do desconto = <span> R$$descontoFormatado </span> <br>
       Valor do acréscimo = <span> R$$acrescimoFormatado <span> <br>
       Valor final da compra = <span> $valorFinalCompraFormatado </span> </p>";   
  ?>
</body>
</html>