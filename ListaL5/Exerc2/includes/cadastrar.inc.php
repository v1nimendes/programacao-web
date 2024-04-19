<?php
 $id        = $_POST["id"];
 $preco     = $_POST["preco"];
 $estoque   = $_POST["estoque"];
 $classific = $_POST['classificacao'];
 $descricao = $_POST['descricao'];

 $id        = trim($id);
 $preco     = trim($preco);
 $estoque   = trim($estoque);
 $classific = trim($classific);
 $descricao = trim($descricao);

 
 $id        = $conexao->escape_string($id);
 $preco     = $conexao->escape_string($preco);
 $estoque   = $conexao->escape_string($estoque);
 $classific = $conexao->escape_string($classific);
 $descricao = $conexao->escape_string($descricao);

 $sql = "INSERT $nomeDaTabela VALUES(
            '$id',
            $preco,
            $estoque,
            '$classific',
            '$descricao')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do produto cadastrados com sucesso! </p>";