<?php
 //criando a tabela 
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id VARCHAR(20) UNIQUE,
          orcamento VARCHAR(300),
          dataInicio DATE,
          horas VARCHAR(20)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);