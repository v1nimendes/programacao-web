<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> MySQL + PHP - modelo 4 </h1>

 <form action="exercicio4.php" method="post">
  <fieldset>
   <legend> Módulo de cadastro de médicos </legend>

   <label class="alinha"> Nome: </label>
   <input type="text" name="nome-medico" autofocus placeholder="Forneça o nome do médico"> <br>

   <label class="alinha"> CRM: </label>
   <input type="text" name="crm"> <br>

   <button name="cadastrar-medico"> Cadastrar médico </button>
 </fieldset>

 <fieldset id="cadastro-pacientes">
  <legend> Módulo de cadastro de pacientes </legend>
   <label class="alinha"> Paciente: </label>
   <input type="text" name="nome-paciente" placeholder="Forneça o nome do paciente"> <br>

   <label class="alinha"> Data da internação: </label>
   <input type="date" name="data-internacao"> <br>

   <label class="alinha"> CRM do médico responsável: </label>
   <select name="crm-atendimento" id="select-medicos"></select> <br> <br>
   
   <button name="cadastrar-paciente"> Cadastrar paciente </button>
  </fieldset>

  
  
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastrar-medico']))
   {
   require "../includes/cadastrar-medico.inc.php";
   }

  if(isset($_POST['cadastrar-paciente']))
   {
   require "../includes/cadastrar-paciente.inc.php";
   }
   
  if(isset($_POST['pesquisar-medico1']))
   {
   require "../includes/pesquisar-medico1.inc.php";
   } 

  if(isset($_POST['pesquisar-medico2']))
   {
   require "../includes/pesquisar-medico2.inc.php";
   } 
  
  require "../includes/desconectar.inc.php";
 ?>    

 <script src="../javascript/manipula-ajax.js"></script>
</body> 
</html> 