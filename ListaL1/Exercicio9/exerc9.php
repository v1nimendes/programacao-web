<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 9 - Lojas AAA - vendas com PHP </h1>

  <?php
   define("DESCONTO", 5/100);
   define("ACRESCIMO", 2/100);

   $valorCompra = $_POST["valor-compra"];
   $acrescimo = 0;
   $desconto = 0;

   if(isset($_POST['forma-pagamento']))
    {
    $formaPagamento = $_POST["forma-pagamento"];

    if($formaPagamento == "0")
     {
     $desconto = $valorCompra * DESCONTO;
     $valorFinalCompra = $valorCompra - $desconto;
     }
    else
     {
     $acrescimo = $valorCompra * ACRESCIMO;
     $valorFinalCompra = $valorCompra + $acrescimo;
     }
    }

   else
    {
    exit("<p> Caro usuário, preste atenção nas informações fornecidas. A forma de pagamento é importante. Forneça o dado solicitado. Aplicação encerrada! </p>"); 
    }

  $participaSorteio = "O cliente NÃO pagou a compra com cartão Visa e, portanto, NÃO está habilitado a participar do sorteio do automóvel.";

  if(isset($_POST['pagamento-cartao']))
   {
   $participaSorteio = "O cliente pagou a compra com cartão Visa e está habilitado a participar do sorteio do automóvel.";
   }


  $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  $descontoFormatado = number_format($desconto, 2, ",", ".");
  $acrescimoFormatado = number_format($acrescimo, 2, ",", ".");

  echo "<p> Resultado da compra: <br>
       Valor inicial da compra = <span> R$$valorCompraFormatado </span> <br>
       Valor do desconto = <span> R$$descontoFormatado </span> <br>
       Valor do acréscimo = <span> R$$acrescimoFormatado <span> <br>
       Valor final da compra = <span> $valorFinalCompraFormatado </span> <br>
       $participaSorteio </p>";
  ?>
</body>
</html>