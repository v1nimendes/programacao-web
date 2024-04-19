<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> POO com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> Exemplo do uso de POO com PHP - integrando com formulários </h1>

  <?php
   //neste ponto do código, chamamos a include que irá conter toda a definição da classe que criaremos agora, a classe chamada Alunos

   require "criar-classes.inc.php";

   //criamos o objeto aluno
   $aluno1 = new Alunos();
   $aluno1->receberDados();
   $mediaCalculada = $aluno1->calcularMedia();
   $aluno1->mostrarResultados($mediaCalculada);   
  ?>
</body>
</html>