<?php
 $nome     = $conexao->escape_string(trim($_POST["nome"]));
 $estado        = $conexao->escape_string(trim($_POST["estado"]));
 $campeao       = $conexao->escape_string(trim($_POST["campeao"]));

 $sql = "INSERT $nomeDaTabela VALUES(
            null,
            '$nome',
            '$estado',
            $campeao)";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Clube cadastrado com sucesso no banco de dados! </p>";