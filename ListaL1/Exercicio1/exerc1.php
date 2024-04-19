<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - exercício 1 - envio de dados ao servidor com PHP </h1>

  <?php
   /*dentro desta área,
   devemos ter apenas comandos da linguagem*/
   //recebendo os dados entregues pelo navegador
   $nomeDoAluno = $_POST["nome-aluno"];
   $nota1 = $_POST["nota1"];
   $peso1 = $_POST['peso1'];
   $nota2 = $_POST['nota2'];
   $peso2 = $_POST['peso2'];

   //cálculo da média do aluno
   $media = ($nota1 * $peso1 + $nota2 * $peso2)/($peso1 + $peso2);

   //retornando a resposta do cálculo da média ao navegador - observe que, para a linguagem PHP, aspas e apóstrofos podem ser usados igualmente para representar strings. A única exceção é no comando echo. O comando echo exige o uso de aspas
   echo "<p> Caro(a) aluno(a) $nomeDoAluno, de acordo com os dados fornecidos, sua média final em PRW é igual <span> $media </span> </p>";
  ?>
</body>
</html>