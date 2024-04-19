<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 6 - funções de usuário em PHP </h1>

  <form action="exerc6.php" method="post">
    <fieldset>
      <legend> validação de campos numéricos em PHP </legend>
      <label class="alinha"> Forneça a idade da pessoa: </label>
      <input type="text" name="idade" placeholder="Forneça a idade da pessoa" autofocus> <br>
      
      <button name="enviar"> Processar idade </button>      
    </fieldset>
  </form> 
  <?php
  include "exerc6.inc.php";
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