<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL4 - exercício 8 - funções de usuário em PHP </h1>

  <form action="exerc8.php" method="post">
    <fieldset>
      <legend> Calculo de médias - UC PRW/CTDS </legend>

      <label class="alinha"> Nota 1: </label>
      <input type="number" name="nota1" step="0.1" min="0" max="10" required> <br> 

      <label class="alinha"> Nota 2: </label>
      <input type="number" name="nota2" step="0.1" min="0" max="10" required> <br> 

      <label class="alinha"> Nota 3: </label>
      <input type="number" name="nota3" step="0.1" min="0" max="10" required> <br>


      <label> Qual o tipo de média a ser calculada? </label> <br>
      
      <input type="radio" name="media" value="0"> <label> Média aritmética simples </label> <br>

      <input type="radio" name="media" value="1"> <label> Média aritmética ponderada </label> <br>
      
      <button name="enviar"> Calcular média </button>      
    </fieldset>
  </form> 
  <?php
   include "exerc8.inc.php";

   if(isset($_POST['enviar']))
    {
    //recerber as 3 notas do aluno 
    $nota1= $_POST['nota1'];
    $nota2= $_POST['nota2'];
    $nota3= $_POST['nota3'];

    //recebendo o value associado ao botão escolhido
    $mediaEscolhida = $_POST['media'];
    
    if($mediaEscolhida == "0")
    {
      $mediaCalculada = calcularMediaAritmeticaSimples($nota1, $nota2, $nota3);
    }
    else
    {
      $mediaCalculada = calcularMediaPonderada($nota1, $nota2, $nota3);
    }

    //mostrar os resultados a pagina web
    echo "<p> Resultados do redimento do aluno: <br>
    Nota1 = <span> $nota1 </span> <br>
    Nota2 = <span> $nota2 </span> <br>
    Nota3 = <span> $nota3 </span> <br>
    Média= <span> $mediaCalculada </span> </p>";
    
    }
  ?>  
</body> 
</html> 