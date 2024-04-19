<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 5 - funções de usuário em PHP </h1>

  <form action="exerc5.php" method="post">
    <fieldset>
      <legend> Dados cadastrais do aluno </legend>
      <label class="alinha"> Nome: </label>
      <input type="text" name="nome-aluno" placeholder="Forneça o nome do aluno" autofocus> <br>

      <label class="alinha"> Digite a nota1 de PRW: </label>
      <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>

      <label class="alinha"> Digite a nota2 de PRW: </label>
      <input type="number" name="nota2" min="0" max="10" step="0.1"> <br>

      <button name="enviar"> Processar dados do aluno </button>      
    </fieldset>
  </form> 
  <?php
   //aqui, vamos inserir o comando que faz o PHP buscar a definição de todas as funções no arquivo externo (include)

   include "exerc5.inc.php";

   //antes de o PHP receber os dados do formulário, devemos nos certificar que o usuário já manipulou estes dados e clicou no botão submit
   if(isset($_POST['enviar']))
    {
    //vamos criar uma subrotina para testar se a caixa nome está vazia
    testarNome();

    //vamos criar e invocar uma subrotina para calcular a média das notas de PRW deste aluno
    $media = calcularMedia();

    //vamos criar uma rotina para o PHP decidir se o aluno está aprovado ou não. O PHP tomará esta decisão baseando-se na média do aluna calculada pela rotina anterior
    testarAprovado($media);
    }


  ?>  
</body> 
</html> 