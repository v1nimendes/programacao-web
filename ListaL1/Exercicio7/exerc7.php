<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 7 - Supermercados AAA - vendas com PHP </h1>

  <?php
   define("DESCONTO", 5/100);
   define("ACRESCIMO", 2/100);

   //recebendo, do navegador, o valor da compra do cliente
   $valorCompra = $_POST["valor-compra"];


   //toda vez que trabalhamos com botões de rádio e checkbox, devemos testar se algum botão foi selecionado no formulário. Se não fizermos este teste, o PHP emite uma mensagem de erro
   if(isset($_POST['forma-pagamento']))
    {
    //recebendo a forma de pagamento do cliente
    $formaPagamento = $_POST["forma-pagamento"];

    //agora, vamos descobrir qual botão de rádio da forma de pagamento foi marcado pelo usuário
    if($formaPagamento == "0")
     {
     $desconto = $valorCompra * DESCONTO;
     }
    else
     {
     $desconto = 0;
     }
    }

   else
    {
    exit("<p> Caro usuário, preste atenção nas informações fornecidas. A forma de pagamento é importante. Forneça o dado solicitado. Aplicação encerrada! </p>"); //você também pode usar a função die(), que faz o mesmo que a função exit()
    }

  //testar se o usuário marcou o botão de rádio relacionado à entrega a domicílio
  if(isset($_POST['forma-entrega']))
   {
   $entregaDomicilio = $_POST['forma-entrega'];

   //vamos testar se o cliente solicitou (ou não) a entrega a domicilio
   if($entregaDomicilio == "0")
    {
    $acrescimo = $valorCompra * ACRESCIMO;
    }
   else
    {
    $acrescimo = 0;
    }
   }
  else
   {
   exit("<p> Caro usuário, preste atenção nas informações fornecidas. A forma de entrega (entrega a domicílio) é importante. Forneça o dado solicitado. Aplicação encerrada! </p>");  
   }

  //mandando o PHP calcular o valor final da compra, considerando-se pagamento com cartão e entrega a domicílio
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

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