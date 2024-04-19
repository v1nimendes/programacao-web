<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Conteúdo restrito </title> 
  <link rel="stylesheet" href="../css/formata-login.css">
</head> 

<body>
  <?php
   //lembre-se de chamar esta include em toda página protegida da sua aplicação. Se você não fizer isto, o usuário pode acessar diretamente este conteúdo restrito, sem passar pelos formulários de cadastro ou login. Ele consegue este acesso digitando o caminho completo da página restrita na URL do navegador
   require "../includes/valida-sessao.inc.php";
  ?>

 <h1> Página protegida </h1>

 <p> Caro usuário, bem-vindo à nossa página de conteúdo restrito. Aqui, você tem acesso ao conteúdo privatido de nossa aplicação, disponível somente ao administrador do sistema. </p> 

 <form action="../includes/logout.inc.php" method="post">
  <fieldset>
    <legend> Desconectar </legend>

    <button> DESCONECTAR </button>
  </fieldset>
 </form>
</body> 
</html> 