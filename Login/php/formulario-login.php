<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário com PHP </title> 
  <link rel="stylesheet" href="../css/formata-login.css">
</head> 

<body> 
 <h1> Autenticação de usuário com PHP - formulário de login </h1>

 <form action="formulario-login.php" method="post">
  <fieldset>
    <legend> Login </legend>
    <label class="alinha"> Login: </label>
    <input type="text" autofocus name="login"> <br>

    <label class="alinha"> Senha: </label>
    <input type="password" name="senha"> <br>

    <button name="logar"> Logar </button>
  </fieldset>
 </form> 
 
 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['logar']))
   {
   require "../includes/testar-login.inc.php";
   }
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 