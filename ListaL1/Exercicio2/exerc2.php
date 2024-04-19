<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 2 - viagem da Maria </h1>

  <?php
   $distancia = $_POST["distancia"];
   $consumo   = $_POST["consumo"];
   $preco     = $_POST['preco'];

   //calculando a quantia de litros de gasolina gastos
   $quantosLitros = $distancia / $consumo;

   //calculando o valor gasto na viagem (em reais)
   $valorGasto = $quantosLitros * $preco;

   //o PHP contém comandos prontos para fazermos a formatação de valores numéricos - o number_format() - o comando number_format deve ser somente usado imediatamente antes do echo. Não pode ser usado em qualquer local do nosso código
   $quantosLitros = number_format($quantosLitros, 1, ",", ".");
   $valorGasto    = number_format($valorGasto, 1, ",", ".");

   echo "<p> Resultados do processamento da viagem da Maria: <br>
         Quantia de litros gastos = <span> $quantosLitros </span> <br>
         Valor gasto em reais com a viagem = <span> R$$valorGasto </span> </p>";
 ?>
</body>
</html>