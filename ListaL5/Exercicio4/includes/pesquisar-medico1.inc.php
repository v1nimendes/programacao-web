<?php
// nessa include recebe o nome do medico vindo do formulario e busca no banco de dados, o número de pacientes atendidos por esse médico
$medicoPesquisado =trim($conexao->escape_string($_POST['pesquisa-nome-medico1']));


//vamos criar a consulta que faz o banco de dados ir até a tabela médicos e retorna a crm do médico pesquisado
$sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome='$medicoPesquisado'";

$resultado = $conexao->query($sql) or die($conexao->error);

//testando se o banco de dados encontrou na tabela médicos, o nome do médico pesquisado
if($conexao->affected_rows > 0)
{
   //encontrou o crm do médico pesquisado
   $registro = $resultado->fetch_array();

   $crmRetornado = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
//ja temos o crm do medico, para sabermos quantos pacientes sao atendidos por este medico, basta criarmos uma última consulta na tabela pacientes, como se vê abaixo:
$sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico='$crmRetornado'";
$resultado = $conexao->query($sql) or die($conexao->error);

$registro = $resultado->fetch_array();
$quantosPacientesAtendidos = $registro[0];
echo "<p> Relatório da busca: <br>
         Nome do médico: <span> $medicoPesquisado </span> <br>
         CRM do médico: <span> $crmRetornado </span> <br>
         Número de pacientes atendidos: <span> $quantosPacientesAtendidos </span> </p>";
         
}
else
{
   echo "<p> Caro usuário, o nome do médico pesquisado <span> $medicoPesquisado </span>  não foi encontrado em nosso banco de dados. </p>";
}