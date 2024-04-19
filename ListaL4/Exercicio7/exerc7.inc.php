<?php
 function testarTemp()
  {
  $temperatura = $_POST['temp'];
  $temperatura = filter_var($temperatura, FILTER_VALIDATE_FLOAT);

  if($temperatura === false)
   {
   exit("<p> ATENÇÃO: temperatura inválida! Aplicação encerrada! </p>");
   } 
  return $temperatura;
  }

 //======================================================

 function testarEscalaTermometrica()
  {
  if(!isset($_POST['conversao']))
   {
    exit("<p> Você deve escolher uma escala termométrica. Aplicação encerrada! </p>");
   }

  $escala = $_POST['conversao'];
  return $escala;
  }

 //====================================================

 function converterDeCparaF($temp)
  {
  $tempConvertida = ($temp * 9/5) + 32;
  echo "<p> Dados da conversão termométrica: <br>
            Temperatura em Celsius = <span> {$temp}ºC </span> <br>
            Temperatura convertida em Fahrenheit = <span> {$tempConvertida}ºF </span> </p>";
  }

 //=====================================================

 function converterDeFparaC($temp)
  {
  $tempConvertida = ($temp - 32) * 5/9;
  echo "<p> Dados da conversão termométrica: <br>
            Temperatura em Fahrenheit = <span> {$temp}ºF </span> <br>
            Temperatura convertida em Celsius = <span> {$tempConvertida}ºC </span> </p>";
  }
?>