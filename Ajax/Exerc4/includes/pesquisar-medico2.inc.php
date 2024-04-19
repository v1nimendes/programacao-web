<?php
 $nomeMedico = trim($conexao->escape_string($_POST['pesquisa-nome-medico2']));

 $dataInserida = trim($conexao->escape_string($_POST['pesquisa-data']));

 //criando a consulta para receber o nome do médico pesquisado e buscar o crm do mesmo
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomeMedico'";
 $resultado = $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  echo "<p> Caro usuário, o médico de nome <span> $nomeMedico </span> não foi encontrado em nosso banco de dados. </p>";
  }
 else
  {
  //vamos resgatar o crm do médico pesquisado
  $registro = $resultado->fetch_array();
  $crmRetornado = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

  //vamos sriar a última parte da consulta na tabela de pacientes. Vamos buscar todos os pacientes atendidos por este crm, internados após a data fornecida no formulário
  $sql = "SELECT * FROM $nomeDaTabela2 WHERE crm_medico = '$crmRetornado' AND data_internacao > '$dataInserida'";

  $resultado = $conexao->query($sql) or die($conexao->error);

  //lembre-se de que há a possibilidade desta consulta não retornar nenhum registro. Isto pode ocorrer em duas situações: Ou todos os pacientes foram internados ANTES da data digitada no formulário OU o médico cadastrado e pesquisado não está cuidando de nenhum paciente

  if($conexao->affected_rows == 0)
   {
   echo "<p> Caro usuário, nenhum paciente cadastrado em nosso banco de dados atende os requisitos da consulta. Mude os parâmetros da pesquisa e tente novamente! </p>";
   }
  else
   {
   echo "<table>
          <caption> Relação de pacientes atendidos pelo Dr.(a) <span> $nomeMedico </span>, com data de internação após <span> $dataInserida </span> </caption>
          <tr>
           <th> ID do paciente </th>
           <th> Paciente </th>
           <th> Data de internação </th>
           <th> CRM do médico responsável </th>
          </tr>";

   while($registro = $resultado->fetch_array())
    {
    $id           = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
    $paciente     = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
    $data         = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
    $crm          = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

    //convertendo a data para o padrão brasileiro
    //Convertemos a data em um vetor

    $vetorData = explode("-", $data);

    //agora, manipulamos as células do vetor para criarmos uma nova variável, com a data no formato adequado
    $dataConvertida = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];


    echo "<tr>
           <td> $id </td>
           <td> $paciente </td>
           <td> $dataConvertida </td>
           <td> $crm </td>
          </tr>";
    }
    echo "</table>";
   }
  }
