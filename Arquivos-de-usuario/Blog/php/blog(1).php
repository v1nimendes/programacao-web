<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos de arquivos de usuário na linguagem PHP </title> 
  <link rel="stylesheet" href="../css/formata-blog.css">
</head> 

<body> 
 <h1> Protótipo de miniblog com arquivos de usuário em PHP </h1>

 <form action="blog.php" method="post">
  <fieldset>
   <legend> Caro  usuário, deixe, aqui, seus comentários e sugestões sobre nosso PI </legend>

   <label class="alinha"> Nome do visitante: </label>
   <input type="text" name="nome" autofocus placeholder="Caro visitante, forneça seu nome..."> <br>

   <label class="alinha"> Comentário do visitante: </label>
   <textarea name="comentario" placeholder="Caro usuário, deixe, aqui, suas críticas, comentários e sugestões sobre nossa aplicação"></textarea> <br>

   <button name="comentar"> Comentar </button>
  </fieldset>
 </form>

 <?php
  //comando para atualizar o horário para o fuso brasileiro
  date_default_timezone_set('America/Sao_Paulo');
  
  if(isset($_POST['comentar']))
   {
   $arquivo = "blog.txt";

   $visitante  = $_POST["nome"];
   $comentario = $_POST["comentario"];
   $data       = date("d/m/Y H:i:s");

   $linha = "<p> Em <span> $data, $visitante </span> comentou: <br>
             <span> $comentario </span> </p>" . PHP_EOL;

   file_put_contents($arquivo, $linha, FILE_APPEND|LOCK_EX);

   //ler os comantários e exibi-los no blog
   if(!file_exists($arquivo))
    {
    echo "<p> Erro na leitura do arquivo. Não foi possível exibir os comentários. </p>";
    }   

   else
    {
    $vetorComentarios = file($arquivo); 
    
    foreach($vetorComentarios as $linha)
     {
     echo $linha;
     }
    }
   }
  ?>    
</body> 
</html> 