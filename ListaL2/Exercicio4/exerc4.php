<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 4 - vetores em PHP </h1>

  <?php
   //testando se o cliente comprou, no mínimo, um produto da nossa loja virtual
   if(isset($_POST['produtos']))
    {
    //criar, manualmente, o vetor com o nome e o preço de cada produto do carrinho de compras
    $vetorProdutos = ["Produto cosmético" => 280.82,
                      "Chocolate" => 30.85,
                      "Tênis" => 500.00];

    //recebendo o nome de cada produto comprado pelo usuário no formulário
    $produtosComprados = $_POST['produtos']; //$produtosComprados é um vetor

    /*echo "<pre>";
    print_r($produtosComprados);
    echo "</pre>";*/

    //agora, vamos percorrer o vetor de produtos comprados com um laço foreach. Antes, criamos a variável somatória para o PHP ir acumulando o valor de cada produto comprado
    $soma = 0;
    echo "<p>";

    foreach($produtosComprados as $nomeDoProduto)
     {
     $soma = $soma + $vetorProdutos[$nomeDoProduto]; 
     echo "Produto comprado = <span> $nomeDoProduto </span> <br>";
     }
    $somaFormatada = number_format($soma, 2, ",", ".");

    echo "Caro(a) cliente, de acordo com a compra efetuada, o valor total a ser pago é de <span> R$$somaFormatada </span>. Obrigado pela preferência, e volte sempre! </p>";    
    }
   else
    {
    echo "<p> Caro(a) cliente, você não adquiriu nenhum produto de nossa loja virtual. Portanto, o valor de sua compra é de <span> R$0,00 </span>. Obrigado pela preferência, e volte sempre! </p>";
    }  
  ?>
</body>
</html>