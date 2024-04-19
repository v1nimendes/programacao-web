<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> MySQL + PHP - modelo 3 </h1>

 <form action="exercicio3.php" method="post">
  <fieldset>
   <legend> Modelo de cadastro de produtos </legend>

   <label class="alinha"> ID: </label>
   <input type="text" name="id" autofocus placeholder="Forneça o código do produto"> <br>

   <label class="alinha"> Preço unitário: </label>
   <input type="number" name="preco" min="0" step="0.01"> <br>

   <label class="alinha"> Quantidade em estoque: </label>
   <input type="number" name="estoque" min="0"> <br>
   
   <button name="cadastrar"> Cadastrar produto </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de alteração dos dados do produto </legend>

   <label class="alinha"> ID: </label>
   <input type="text" name="pesquisa-id" placeholder="Forneça o código do produto para pesquisa"> <br>

   <label class="alinha"> Novo preço unitário: </label>
   <input type="number" name="altera-preco" min="0" step="0.01"> <br>
   
   <button name="alterar"> Alterar preço do produto </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de exclusão de produto </legend>

   <label class="alinha"> Forneça a quantidade em estoque mínima: </label>
   <input type="number" name="exclui-estoque" min="0"> <br>
   
   <button name="excluir"> Excluir produtos com estoque abaixo do mínimo </button>
  </fieldset>
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
   {
   require "../includes/cadastrar.inc.php";
   }

  if(isset($_POST['alterar']))
  {
    require "../includes/alterar-preco.inc.php";
  }

  if(isset($_POST['excluir']))
  {
    require "../includes/excluir-produto.inc.php";
  }
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 