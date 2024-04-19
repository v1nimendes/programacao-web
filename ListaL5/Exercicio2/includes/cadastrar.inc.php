<?php
 //operação de cadastro de dados
 $id = $conexao->escape_string(trim($_POST["id"]));
 $preco  = $conexao->escape_string(trim($_POST["preco"]));
 $estoque  = $conexao->escape_string(trim($_POST["estoque"]));
 $classific = $conexao->escape_string(trim($_POST["classificacao"]));
 $descricao = $conexao->escape_string(trim($_POST["descricao"]));

 //cadastro dos dados no banco
 $sql = "INSERT $nomeDaTabela VALUES(
            '$id',
            $preco,
            $estoque,
            '$classific',
            '$descricao')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do produto cadastrados com sucesso! </p>";