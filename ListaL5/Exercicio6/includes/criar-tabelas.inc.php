<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
          matricula VARCHAR(20) PRIMARY KEY,
          aluno VARCHAR(300)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
          codigo INT PRIMARY KEY AUTO_INCREMENT,
          uc VARCHAR(300),
          matricula_aluno VARCHAR(20),
          FOREIGN KEY(matricula_aluno) REFERENCES $nomeDaTabela1(matricula)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);