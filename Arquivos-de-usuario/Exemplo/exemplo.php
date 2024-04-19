<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Arquivos de usuário em PHP </title> 
</head> 

<body> 
 <h1> Arquivos de usuário em PHP </h1>
 <?php
  //pequeno script de exemplo mostrando como a linguagem PHP manipula arquivos de usuário na máquina servidora

  //como criar e armazenar dados em um arquivo de usuário em PHP
  $jogosDePC = "Tomb Raider 2013" . PHP_EOL;
  $jogosDePC = $jogosDePC . "God Of War" . PHP_EOL;
  $jogosDePC = $jogosDePC . "Dragon Age: Inquisition". PHP_EOL;
  $jogosDePC = $jogosDePC . "Assassin's Creed Black Flag";

  //dando nome ao arquivo que irá armazenar os títulos dos jogos

  $arquivo = "jogos.txt";

  //mandando o PHP escrever os títulos dos jogos dentro do arquivo
  $escreveu = file_put_contents($arquivo, $jogosDePC, FILE_APPEND|LOCK_EX);

  //como fazer o PHP testar se a gravação de dados no arquivo foi bem-sucedida
  if($escreveu === false)
   {
   echo "<p> Erro na gravação do arquivo. </p>";
   }
  else
   {
   echo "<p> Gravação bem-sucedida do arquivo $arquivo. Atualmente, este arquivo tem um tamanho de $escreveu bytes. </p>";
   }

  //fazendo o PHP acessar os dados do arquivo e tratar estes dados dentro do nosso código. Vamos usar uma função que lê todo o conteúdo do arquivo e o coloca em um vetor
  $vetorDados = file($arquivo);

  /*echo "<pre>";
  print_r($vetorDados);
  echo "</pre>";*/

  echo "<p> Confira, abaixo, o conteúdo do arquivo $arquivo: </p>";

  foreach($vetorDados as $nomeDoJogo)
   {
   echo "<p> $nomeDoJogo </p>";
   }
 ?>
    
</body> 
</html> 