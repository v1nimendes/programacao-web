<?php
 //área de declaração das subrotinas sendo invocadas no script principal
 function testarNome()
  {
  //em se tratando de testes em caixas do tipo texto, com dados vindos do formulário, a primeira coisa que devemos mandar o PHP fazer nesta subrotina é excluir os espaços em branco que o usuário digitou para o nome do aluno
  $nome = trim($_POST['nome-aluno']);

  $quantosCaracteres = strlen($nome);
  if($quantosCaracteres == 0)
   {
   exit("<p> Atenção: a caixa com o nome do aluno deve ser preenchida. Aplicação encerrada! </p>");
   }
  }

 //======================================================

 function calcularMedia()
  {
  //recebendo as duas notas do aluno
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $mediaCalculada = ($nota1 + $nota2)/2;
  return $mediaCalculada;
  }

 //=====================================================

 function testarAPROVADO($media)
  {
  if($media >= 6)
   {
   echo "<p> O aluno foi aprovado, com média <span> $media </span> </p>";
   }
  else
   {
   echo "<p> O aluno NÃO foi aprovado. Sua média é <span> $media </span> </p>";
   }  
  }
?>