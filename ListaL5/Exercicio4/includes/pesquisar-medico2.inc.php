<?php
$nomeMedico = trim($conexao->escape_string($_POST['pesquisa-nome-medico2']));

$dataInserida = trim($conexao->escape_string($_POST['pesquisa-data']));

//criando a consulta para receber o nome do médico pesquisado e vuscar o crm do mesmo 
$sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomeMedico'";
$resultado = $conexao->query($sql) or die ($conexao->error);

if($conexao->affected_rows == 0 )
{
    echo "<p> Caro usuário o médico de nome <span> $nomeMedico </span> não foi encontrado no banco de dados </p>";
}
else
{
//vamos registrar o crm do medíco pesquisado 
$registro = $resultado->fetch_array();
$crmRetornado = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

//vamos criar a ultima data da consulta na tabela de pacientes. Vamos buscar todos os pacintes atendidos por este crm, internados apos a data fornecida no formulario
$sql = " SELECT * FROM $nomeDaTabela2 WHERE crm_medico = '$crmRetornado' AND data_internacao > '$dataInserida'";

}