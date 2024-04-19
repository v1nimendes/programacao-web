<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> MySQL + PHP - modelo 6 </h1>

 <form action="exercicio6.php" method="post">
  <fieldset>
   <legend> Módulo de cadastro de alunos </legend>

   <label class="alinha"> Aluno: </label>
   <input type="text" name="nome-aluno" autofocus> <br>

   <label class="alinha"> Matrícula: </label>
   <input type="text" name="matricula"> <br>

   <button name="cadastrar-aluno"> Cadastrar aluno </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de cadastro de UCs </legend>
   <label class="alinha"> Nome da UC: </label>
   <input type="text" name="nome-uc"> <br>

   <label class="alinha"> Matrícula do aluno: </label>
   <input type="text" name="matricula-uc"> <br>
   
   <button name="cadastrar-uc"> Cadastrar unidade curricular </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de pesquisa </legend>

   <label class="alinha"> Pesquisa pelo NOME do aluno: </label>
   <input type="text" name="pesquisa-nome-aluno"> <br>

   <button name="pesquisar"> Mostrar dados das UCs frequentadas pelo aluno </button>
  </fieldset>  
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastrar-aluno']))
   {
   require "../includes/cadastrar-aluno.inc.php";
   }

  if(isset($_POST['cadastrar-uc']))
   {
   require "../includes/cadastrar-uc.inc.php";
   }
   
  if(isset($_POST['pesquisar']))
   {
   require "../includes/pesquisar-ucs.inc.php";
   } 

  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 