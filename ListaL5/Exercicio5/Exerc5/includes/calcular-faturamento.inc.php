<?php
 //para que o o PHP peça ao banco de dados para calcular o faturamento com a venda de toda a quantia em estoque dos produtos não-perecíveis, usamos a consulta abaixo
 $sql = "SELECT SUM(preco) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $faturamento = $registro[0];

 $faturamentoFormatado = number_format($faturamento, 2, ",", ".");

 echo "<p> O faturamento total com a venda de todos os medicamentos do banco de dados é igual a <span> R$$faturamentoFormatado </span> </p>";