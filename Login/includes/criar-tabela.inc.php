<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id INT PRIMARY KEY AUTO_INCREMENT,
          nome VARCHAR(300),
          email VARCHAR(300),
          login VARCHAR(100) UNIQUE,
          senha VARCHAR(130)) ENGINE=innoDB";

 //notar o comprimento VARCHAR no campo da senha. Nunca deve ser inferior a 128 caracteres, já que a senha será armazenada neste campo, criptografada

 $conexao->query($sql) or exit($conexao->error);