<?php
 $medicamento  = $conexao->escape_string(trim($_POST["nomeMedicamento"]));
 $preco      = $conexao->escape_string(trim($_POST["preco"]));
 $validade = $conexao->escape_string(trim($_POST["validade"]));

 $sql = "INSERT $nomeDaTabela VALUES(
             null,
            '$medicamento',
             $preco,
            '$validade')"; 

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Medicamento cadastrado com sucesso! </p>";  