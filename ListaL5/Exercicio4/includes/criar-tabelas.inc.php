<?php
//criando a tabela medicos
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
          crm VARCHAR(20) PRIMARY KEY,
          nome VARCHAR(300)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    nome_paciente VARCHAR(300),
    data_internacao DATE,
    crm_medico VARCHAR(20),
    FOREIGN KEY (crm_medico) REFERENCES
    $nomeDaTabela1 (crm)) ENGINE=innoDB";

$conexao->query($sql) or exit($conexao->error);

