<?php
 $uc          = $conexao->escape_string(trim($_POST["nome-uc"]));
 $matricula   = $conexao->escape_string(trim($_POST["matricula-uc"]));

 $sql = "INSERT $nomeDaTabela2 VALUES(
            null,
            '$uc',
            '$matricula')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Unidade curricular do alouno cadastrada com sucesso no banco de dados! </p>";