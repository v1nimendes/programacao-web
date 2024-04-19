<?php
 //Criando a tabela medicamentos
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          ID INT PRIMARY KEY AUTO_INCREMENT,
          nomeclube VARCHAR(300),
          estado VARCHAR (300),
          campeao INT) ENGINE=innoDB";

$conexao->query($sql) or exit($conexao->error);