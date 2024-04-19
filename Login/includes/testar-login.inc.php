<?php
 $login     = $conexao->escape_string(trim($_POST["login"]));
 $senha     = $conexao->escape_string(trim($_POST["senha"]));

 //buscamos, no banco de dados, a senha  do usuário já criptografada, usando, como chave de busca, o login 
 $sql = "SELECT senha FROM $nomeDaTabela WHERE login = '$login'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //testar se a consulta anterior foi bem-sucedida (o login fornecido está correto)
 if($conexao->affected_rows == 0)
  {
  exit("<p> Credenciais de autenticação incorretas. Tente novamente! </p>");
  }

 //recebendo, do banco de dados, a senha criptografada
 $vetorRegistro = $resultado->fetch_array();
 $senhaCriptografada = $vetorRegistro[0];

 //conferindo se a senha digitada pelo usuário é igual à senha deste mesmo usuário, criptografada no banco de dados
 $validouSenha = password_verify($senha, $senhaCriptografada);

 //testando se as senhas são iguais
 if($validouSenha)
  {
  //se o PHP entrar aqui, senha e login estão corretos. Direcionamos o usuário para a página restrita e definimos a variável de sessão para true
  session_start();
  $_SESSION["conectado"] = true;
  header("location: protegida.php");
  }
 else
  {
  echo "<p> Credenciais de autenticação incorretas. Tente novamente ou use o link a seguir para voltar à página home. <br>
  <a href='home.php'> Retornar à home </a> </p>";
  }