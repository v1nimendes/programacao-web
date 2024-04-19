<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL2 - exercício 8 - vetores em PHP </h1>

  <?php
   define("DESCONTO", 5/100);

   if(isset($_POST['produtos']))
    {    
    $vetorProdutos = ["Dorflex" => 7.56,
                      "Rivotril" => 25.99,
                      "Dipirona" => 3.20];

    $produtosComprados = $_POST['produtos']; 


    $soma = 0;
    echo "<p>";

    foreach($produtosComprados as $nomeDoProduto)
     {
     $soma = $soma + $vetorProdutos[$nomeDoProduto]; 
     echo "Medicamento comprado = <span> $nomeDoProduto </span> <br>";
     }
    //antes de mostrarmos o valor final da compra de medicamentos, devemos fazer o PHP descobrir se o cliente tem direito ao desconto, pela faixa etária (60 anos ou mais)

    $desconto = 0;
    if(isset($_POST['faixa-etaria']))
     {
     $desconto = $soma * DESCONTO;
     }

    $valorFinalCompra = $soma - $desconto;
    $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

    echo "Caro(a) cliente, de acordo com a compra efetuada, o valor total a ser pago é de <span> R$$valorFinalCompraFormatado </span>. O valor do desconto concedido é de <span> R$$desconto </span>. Obrigado pela preferência, e volte sempre! </p>";    
    }
   else
    {
    echo "<p> Caro(a) cliente, você não adquiriu nenhum produto de nossa farmácia. Portanto, o valor de sua compra é de <span> R$0,00 </span>. Obrigado pela preferência, e volte sempre! </p>";
    }  
  ?>
</body>
</html>