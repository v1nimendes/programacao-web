<?php
 function testarIdade()
  {
  $idade = $_POST['idade'];
  $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);

  //testando se o valor retornado pela função filter_var() é falso
  if($valorTestado == false OR $valorTestado < 0)
   {
    exit("<p> A idade deve ser um número inteiro maior ou igual a zero. </p>");    
   }
  else
   {
    return $idade;
   }
  }

 //======================================================

 function testarVoto($idade)
  {
  if($idade >= 16)
   {
    echo "<p> A pessoa está apta a votar. </p>";
   }
  else
   {
  echo "<p> A pessoa NÃO está apta a votar. </p>";
   }
  }
?>