<?php 
//para o PHP acessar o banco de dados e cuperar o CRM de todos os médicos cadastrados, devemos inserir algmas includes de conexão com o banco
require "dados-conexao.inc.php";
require "conectar.inc.php";
require "abrir-banco.inc.php";
require "definir-utf8.inc.php";

$sql = "SELECT crm FROM $nomeDaTabela1";
$resultado = $conexao->query($sql);

$numeroLinhasRetornadas = $conexao->affected_rows;
echo $numeroLinhasRetornadas;

//testando se o PHP encontrou o crm, de pelo menos, um médico cadastrado e inserindo o CRM de cada médico dentro de uma tag <option>
if($numeroLinhasRetornadas > 0)
{
    while($registro = $resultado->fetch_array())
    {
        $crm = $registro[0];
        $crm = htmlentities($crm, ENT_QUOTES, "UTF-8");
        echo "<option> $crm </option>";
    }
}