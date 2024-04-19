<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Sessão com PHP </title> 
</head> 

<body>
 <h1> Lendo e apagando variáveis de sessão com PHP </h1>
 <form action="sessao2.php" method="post">
   <button name="ler-sessao"> Mostrar os dados das variáveis de sessão </button> 

   <button name="apagar-sessao"> Apagar os dados das variáveis de sessão </button> 
 </form>

 <?php
  session_start();

  if(isset($_POST['ler-sessao']))
   {
   //supondo que o vetor de sessão já existe, vamos acessar seu conteúdo
   $aluno = $_SESSION['aluno'];
   $nota  = $_SESSION['nota-aluno'];

   echo "<p> Dados recuperados das variáveis de sessão: <br>
   
        Aluno = $aluno <br>
        Nota de PRW = $nota </p>";
   }

  if(isset($_POST['apagar-sessao']))
   {
   //supondo o vetor de sessão exista, é assim que o PHP apaga ("desloga") uma sessão
   $_SESSION = [];
   session_destroy();

   echo "<p> Vetor de sessão apagado com sucesso! </p>";
   }
 ?>    
</body> 
</html> 