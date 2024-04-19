<?php
 $id           = $conexao->escape_string(trim($_POST["id"]));
 $orcamento    = $conexao->escape_string(trim($_POST["orcamento"]));
 $dataInicio   = $conexao->escape_string(trim($_POST['data']));
 $horas        = $conexao->escape_string(trim($_POST['hora']));

 $sql = "INSERT $nomeDaTabela VALUES(
            '$id',
            $orcamento,
            '$dataInicio',
            '$horas')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Informações cadastradas com sucesso! </p>";