<?php
 //nesta include, queremos que o banco de dados localize o produto com a menor quantidade em estoque e devolva a descrição deste produto. Vamos divir esta operação em duas etapas separadas

 //na primeira consulta, vamos pedir ao MySQL que localize e devolva a menor quantidade em estoque dos produtos cadastrados

 $sql = "SELECT MAX(preco) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $maisCaro = $registro[0];

 //na segunda consulta, usamos a variável do PHP para o banco de dados pesquisar qual produto tem a menor quantidade em estoque e devolver a descrição deste produto
 $sql = "SELECT nome_medicamento FROM $nomeDaTabela WHERE preco=$maisCaro";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $medicamento = $registro[0];

 echo "<p> O medicamento mais caro é = <span> $medicamento </span> <br>
           Valor do medicamento = <span> R$$maisCaro </span> </p>";