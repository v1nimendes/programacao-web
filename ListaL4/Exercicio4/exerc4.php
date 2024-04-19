<?php
 function calcularComissao($valorVenda, $percentComissao)
  {
  $valorComissao = $valorVenda * $percentComissao/100;
  return $valorComissao;
  }

 //======================================================

 function calcularDesconto($valorVenda)
  {
  $desconto = 0;
  if(isset($_POST['forma-pagamento']))
   {
   define("DESCONTO", 5/100);
   $desconto = $valorVenda * DESCONTO;
   }
  return $desconto;
  }

 //======================================================

 function calcularValorFinal($valorVenda, $valorDesconto)
  {
  $valorFinalVenda = $valorVenda - $valorDesconto;
  return $valorFinalVenda;
  }

 //======================================================

 function mostrarResultados($valorVenda, $percentComissao, $valorDaComissao, $valorDesconto, $valorFinalVenda)
  {
  echo "<p> Resultados do processamento da venda: <br>
        Valor inicial da compra = <span> R$$valorVenda </span> <br>
        Percentual de comissão do vendedor = <span> {$percentComissao}% </span> <br>
        Valor da comissão do vendedor = <span> R$$valorDaComissao </span> <br>
        Valor do desconto do cliente = <span> R$$valorDesconto </span> <br>
        Valor final da venda = <span> R$$valorFinalVenda </span> </p>";
  }
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 4 - funções de usuário em PHP </h1>

  <form action="exerc4.php" method="post">
    <fieldset>
      <legend> Processamento de vendas - Lojas AAAA </legend>
      <label class="alinha"> Forneça o valor da venda: </label>
      <input type="number" name="venda" step="0.01" min="0"> <br> 


      <label class="alinha"> Forneça o percentual de comissão do vendedor: </label>
      <input type="number" name="percent-vendedor" min="0" step="0.1"> <br> <br>

      <input type="checkbox" name="forma-pagamento[]"> <label> Marque esta opção se o pagamento foi feito com cartão de fidelidade </label> <br>
      
      <button name="enviar"> Processar venda </button>      
    </fieldset>
  </form> 
  <?php
   if(isset($_POST['enviar']))
    {
    //recebendo os dados do formulário
    $valorVenda = $_POST['venda'];
    $percentComissao = $_POST['percent-vendedor'];

    //chamando a rotina que calcula o valor da comissão do vendedor
    $valorDaComissao = calcularComissao($valorVenda, $percentComissao);

    //chamando a função que calcula o valor do desconto que a loja concederá ao cliente
    $valorDesconto = calcularDesconto($valorVenda);

    //chamando a função que calcula o valor final da venda feita ao cliente
    $valorFinalVenda = calcularValorFinal($valorVenda, $valorDesconto);

    //chamando a função que mostra todos os resultados da venda na página web
    mostrarResultados($valorVenda, $percentComissao, $valorDaComissao, $valorDesconto, $valorFinalVenda);
    }    
  ?>  
</body> 
</html> 