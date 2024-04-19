<?php
 //Criando a tabela medicamentos
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id INT PRIMARY KEY AUTO_INCREMENT,
          nome_medicamento VARCHAR(300),
          preco DECIMAL(6,2),
          validade DATE)";

$conexao->query($sql) or exit($conexao->error);