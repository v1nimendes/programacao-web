<?php
 //operação de cadastro de dados
 $matric = $_POST["matricula"];
 $aluno  = $_POST["aluno"];
 $media  = $_POST["media-prw"];

 //tirar espaços em branco dos dados digitados pelo usuário
 $matric = trim($matric);
 $aluno  = trim($aluno);
 $media  = trim($media);

 //antes de o PHP enviar estes dados ao banco, devemos usar o filtro que impede qualquer tentativa de invasão do servidor através da técnica de injeção de SQL. Veja o comando abaixo:
 $matric = $conexao->escape_string($matric);
 $aluno  = $conexao->escape_string($aluno);
 $media  = $conexao->escape_string($media);

 //cadastro dos dados no banco
 $sql = "INSERT $nomeDaTabela VALUES(
            '$matric',
            '$aluno',
            $media)";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do aluno cadastrados com sucesso! </p>";