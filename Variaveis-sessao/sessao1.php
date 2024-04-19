<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Variáveis de sessão com PHP </title> 
</head> 

<body> 
 <h1> Gravando informações no servidor com variáveis de sessão </h1>

 <form action="sessao1.php" method="post">
  <label> Nome do aluno: </label>
  <input type="text" name="aluno"> <br> <br>

  <label> Nota do aluno em PRW: </label>
  <input type="number" name="nota" min="0" max="10" step="0.01"> <br> <br>

  <button name="criar-variaveis-sessao"> Criar sessão </button>
 </form>

 <?php
  if(isset($_POST['criar-variaveis-sessao']))
   {
   //registrar ou iniciar a sessão
   session_start();

   $aluno = $_POST["aluno"];
   $nota  = $_POST["nota"];

   //vamos retirar os dados das variáveis simples e colocar nas variáveis de sessão. Notar que uma variável de sessão nada mais é do que um vetor regular em PHP, com um nome especial
   $_SESSION["aluno"] = $aluno;
   $_SESSION["nota-aluno"] = $nota;

   echo "<a href='sessao2.php'> Ir para o segundo arquivo e mostrar os dados da sessão </a>";
   }
 ?>    
</body> 
</html> 