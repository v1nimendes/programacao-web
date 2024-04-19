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

  <fieldset>
   <legend> Módulo de cadastro de pacientes </legend>

   <label class="alinha"> Paciente: </label>
   <input type="text" name="nome-paciente" placeholder="Forneça o mome do paciente"> <br>

   <label class="alinha"> Data de intrernaçã: </label>
   <input type="date" name="data-internacao"> <br>

   <label class="alinha"> CRM do médico responsavel </label>
   <input type="text" name="crm-atendimento"> <br>
   
   <button name="cadastrar-paciente"> Cadastrar paciente </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de pesquisa consulta 1 </legend>

   <label class="alinha"> Pesquisa pelo NOME do médico: </label>
   <input type="text" name="pesquisa-nome-medico1"> <br>

   <button name="pesquisar-medico1"> Mostrar número de pacientes atendidos </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de pesquisa consulta 2 </legend>

   <label class="alinha"> Pesquisa pelo NOME do médico: </label>
   <input type="text" name="pesquisa-nome-medico2"> <br>

   <label class="alinha"> Data de internação: </label>
   <input type="date" name="pesquisa-data"> <br>

   <button name="pesquisa-medico2"> Relação de pacientes atendidos </button>
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
</body> 
</html> 