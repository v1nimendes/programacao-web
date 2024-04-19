<?php
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela WHERE media >= 6";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $numeroAlunosAprovados = $registro[0];

 echo "<p> Número de alunos aprovados em PRW = <span> $numeroAlunosAprovados aluno(s) </span> </p>";