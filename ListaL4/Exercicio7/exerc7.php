<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 3 - funções de usuário em PHP </h1>

  <form action="exerc7.php" method="post">
    <fieldset>
      <legend> Conversão de temperatura </legend>
      <label> Forneça a temperatura a ser convertida: </label>
      <input type="number" name="temp" step="0.1"> <br> <br>

      <label> Escolha a escala de conversão: </label> <br>
      <input type="radio" name="conversao" value="deCparaF"> <label> De Celsius para Fahrenheit </label> <br>

      <input type="radio" name="conversao" value="deFparaC"> <label> De Fahrenheit para Celsius </label> <br>
      
      <button name="enviar"> Converter temperatura </button>      
    </fieldset>
  </form> 
  <?php
   include "exerc7.inc.php";

   if(isset($_POST['enviar']))
    {
    //testando se o usuário forneceu um valor real na caixa da temperatura
    $temp = testarTemp();

    //testar se o usuário escolheu uma escala de conversão
    $escalaEscolhida = testarEscalaTermometrica();

    //testar qual escala termométrica foi escolhida e chamar a função de conversão apropriada

    if($escalaEscolhida == "deCparaF")
     {
     converterDeCparaF($temp);
     }

    else
     {
     converterDeFparaC($temp);
     }
    }
  ?>  
</body> 
</html> 