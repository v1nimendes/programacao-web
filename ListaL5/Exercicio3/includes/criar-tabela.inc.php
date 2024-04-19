<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id VARCHAR(20) PRIMARY KEY,
          preco DECIMAL(6,2),
          estoque INT)";

 $conexao->query($sql) or exit($conexao->error);