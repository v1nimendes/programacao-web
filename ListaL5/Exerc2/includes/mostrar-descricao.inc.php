<?php
 //nesta include, queremos que o banco de dados localize o produto com a menor quantidade em estoque e devolva a descrição deste produto. Vamos divir esta operação em duas etapas separadas

 //na primeira consulta, vamos pedir ao MySQL que localize e devolva a menor quantidade em estoque dos produtos cadastrados

 $sql = "SELECT MIN(estoque) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $menorQuantiaEstoque = $registro[0];

 //na segunda consulta, usamos a variável do PHP para o banco de dados pesquisar qual produto tem a menor quantidade em estoque e devolver a descrição deste produto
 $sql = "SELECT descricao FROM $nomeDaTabela WHERE estoque=$menorQuantiaEstoque";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $descricao = $registro[0];

 echo "<p> Descrição do produto com a menor quantidade em estoque = <span> $descricao </span> <br>
           Valor da menor quantidade em estoque = <span> $menorQuantiaEstoque unidades </span> </p>";