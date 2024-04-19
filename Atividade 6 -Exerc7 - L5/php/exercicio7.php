<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> MySQL + PHP - modelo 7 </h1>

 <form action="exercicio7.php" method="post">
  <fieldset>
   <legend> Módulo de cadastro de médicos </legend>

   <label class="alinha"> ID: </label>
   <input type="text" name="id" autofocus> <br>

   <label class="alinha"> Orçamento(R$): </label>
   <input type="number" name="orcamento" min="0" max="1000000" step="0.01"> <br>

   <label class="alinha"> Data de inicio: </label>
   <input type="date" name="data"> <br>

   <label class="alinha"> Horas necessárias: </label>
   <input type="number" name="hora"> <br>

 </fieldset>
<fieldset>
<legend> Escolha a função que deseja realizar </legend>
 <div>
   <button name="cadastrar"> Cadastrar informações </button>

   <button name="tabular"> Tabular informaçães </button>
 </div>
 <div>
   <button name="mostrar"> Mostrar projetos </button>

   <button name="exclua"> Excluir registros </button>
  </div>
</fieldset>

 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastrar']))
   {
   require "../includes/cadastrar.inc.php";
   }

  if(isset($_POST['tabular']))
   {
   require "../includes/tabular-dados.inc.php";
   }
   
  if(isset($_POST['exclua']))
   {
   require "../includes/excluir-produto.inc.php";
   } 

  if(isset($_POST['mostrar']))
   {
   require "../includes/mostrar-projetos.inc.php";
   } 
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 