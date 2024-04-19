<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Atividade 7 - AVALIAÇÃO </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Atividade 7 </h1>

 <form action="atividade7.php" method="post">
  <fieldset>
   <legend> Cadastro clubes de futebol </legend>

   <label class="alinha"> Nome do clube: </label>
   <input type="text" name="nome" autofocus> <br>

   <label class="alinha"> Estado de origem: </label>
   <input type="text" name="estado"> <br>

   <label class="alinha"> Quantas vezes já foi campeão: </label>
   <input type="number" name="campeao"> <br>

   
  </fieldset>
  
  <fieldset>
  <div>
  <button name="cadastrar-time"> Cadastrar time </button>
</div>
<div>
  <button name="tabular"> Clubes que já foram tricampeões </button>
</div>
</fieldset>
  
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar-time']))
   {
   require "../includes/cadastrar-time.inc.php";
   }

   if(isset($_POST['tabular']))
   {
   require "../includes/tabular-dados.inc.php";
   }


  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 