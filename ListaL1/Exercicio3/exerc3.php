<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 3 - processamento de vendas </h1>

  <?php
   //representando os percentuais por meio de constantes da linguagem PHP
   define("DESCONTO", 10/100);
   define("ICMS", 12/100);
   define("COMISSAO", 5/100);

   $valorCompra = $_GET["valor-compra"];

   //cálculo do valor do desconto dado ao cliente
   $desconto = $valorCompra * DESCONTO;

   //cálculo do ICMS
   $icms = $valorCompra * ICMS;

   //cálculo da comissão do vendedor
   $comissao = $valorCompra * COMISSAO;

   //formatando os valores numéricos antes do comando echo
   $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
   $descontoFormatado = number_format($desconto, 2, ",", ".");
   $icmsFormatado = number_format($icms, 2, ",", ".");
   $comissaoFormatada = number_format($comissao, 2, ",", ".");

   echo "<p> Resultado do processamento da venda: <br>
         Valor da compra do cliente = <span> R$$valorCompraFormatado </span> <br>
         Desconto do cliente = <span> R$$descontoFormatado </span> <br>
         Valor do ICMS = <span> R$$icmsFormatado </span> <br>
         Valor da comissão do vendedor = <span> R$$comissaoFormatada </span> </p>";
   ?>
</body>
</html>