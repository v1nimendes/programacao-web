<?php
 //esta include recebe o nome do médico vind do formulário e busca, no banco de dados, o número de pacientes atendidos por este médico
 $medicoPesquisado = trim($conexao->escape_string($_POST['pesquisa-nome-medico1']));

 //vamos criar a consulta que faz o banco de dados ir até a atabela médicos e retornar o crm do médico pesquisado

 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico='$medicoPesquisado'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //testando se o banco de dados encontrou, na tabela médicos, o nome do médico pesquisado
 if($conexao->affected_rows > 0)
  {
  //encontrou o crm do médico pesquisado
  $registro = $resultado->fetch_array();
  $crmRetornado = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

  //agora, já temos o crm do médico pesquisado. Para sabermos quantos pacientes são atendidos por este médico, basta criarmos uma última consulta na tabela pacientes, como se vê abaixo:
  $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico='$crmRetornado'";
  $resultado = $conexao->query($sql) or die($conexao->error);

  $registro = $resultado->fetch_array();
  $quantosPacientesAtendidos = $registro[0];
  echo "<p> Relatório da busca no banco de dados: <br>
            Nome do médico pesquisado = <span> $medicoPesquisado </span> <br>
            CRM do médico = <span> $crmRetornado </span> <br>
            Número de pacientes atendidos = <span> $quantosPacientesAtendidos pacientes </span> </p>";
  }
 else
  {
  echo "<p> Caro usuário, o nome do médico pesquisado <span> $medicoPesquisado </span> não foi encntrado em nosso banco de dados. </p>";
  }
