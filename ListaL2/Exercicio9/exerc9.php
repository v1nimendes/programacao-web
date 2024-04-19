<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 9 - vetores em PHP </h1>

  <?php
   define("DESCONTO", 5/100);

   if(isset($_POST['produtos']))
    {    
    $vetorProdutos = ["Arroz" => 7.56,
                      "Feijão" => 8.90,
                      "Leite" => 5.20,
                      "Café" => 15.00];
                  
    $produtosComprados = $_POST['produtos']; 

    $soma = 0;
    echo "<p>";

    foreach($produtosComprados as $nomeDoProduto)
     {
     $soma = $soma + $vetorProdutos[$nomeDoProduto]; 
     echo "Alimento comprado = <span> $nomeDoProduto </span> <br>";
     }
    
    $desconto = 0;
    if(isset($_POST['fidelidade']))
     {
     $desconto = $soma * DESCONTO;
     }

    $valorFinalCompra = $soma - $desconto;
    $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
    $descontoFormatado = number_format($desconto, 2, ",", ".");

    echo "Caro(a) cliente, de acordo com a compra efetuada, o valor total a ser pago é de <span> R$$valorFinalCompraFormatado </span>. O valor do desconto concedido é de <span> R$$descontoFormatado </span>. Obrigado pela preferência, e volte sempre! </p>";    
    }
   else
    {
    echo "<p> Caro(a) cliente, você não adquiriu nenhum produto de nosso supermercado. Portanto, o valor de sua compra é de <span> R$0,00 </span>. Obrigado pela preferência, e volte sempre! </p>";
    }  
  ?>
</body>
</html>