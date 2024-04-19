<?php
 $idBusca = $conexao->escape_string(trim($_POST['pesquisa-id']));
 $novoPreco = $conexao->escape_string(trim($_POST['altera-preco']));

 $sql = "UPDATE $nomeDaTabela SET preco=$novoPreco WHERE id='$idBusca'";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> O novo preço foi alterado com sucesso no banco de dados </p>";