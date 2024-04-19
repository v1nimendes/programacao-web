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
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 2 - funções de usuário em PHP </h1>

  <form action="exerc2.php" method="post">
    <fieldset>
      <legend> validação de campos numéricos em PHP </legend>
      <label class="alinha"> Forneça a idade da pessoa: </label>
      <input type="text" name="idade" placeholder="Forneça a idade da pessoa" autofocus> <br>
      
      <button name="enviar"> Processar idade </button>      
    </fieldset>
  </form> 
  <?php
   if(isset($_POST['enviar']))
    {
    //testar se a idade é um inteiro maior ou igual a zero
    $idade = testarIdade();

    //vamos testar se a pessoa pode (ou não) votar
    testarVoto($idade);
    }
  ?>  
</body> 
</html> 