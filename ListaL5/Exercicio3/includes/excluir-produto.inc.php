<?php
$estoqueMinimo = $conexao->escape_string(trim($_POST['exclui-estoque']));

 $sql = "DELETE FROM $nomeDaTabela WHERE estoque < $estoqueMinimo";

 $conexao->query($sql) or die($conexao->error);

 //testamos se algum registro foi apagado
 if($conexao->affected_rows > 0)
 {
    echo "<p> Prezado usuário foram apagados um total de <span> $conexao->affected_rows </span> </p>";
 }
 else
 {
    echo "<p> Prezado usuário, nenhum produto foi apagado do banco de dados, pois todos eles estão com estoque igual ou acima do fornecido. </p>";
 }