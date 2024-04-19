<?php
 $nomeAluno = trim($conexao->escape_string($_POST['pesquisa-nome-aluno']));

 $sql = "SELECT matricula FROM $nomeDaTabela1 WHERE aluno = '$nomeAluno'";
 $resultado = $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  echo "<p> Caro usuário, o(a) aluno(a) de nome <span> $nomeAluno </span> não foi encontrado(a) em nosso banco de dados. </p>";
  }
 else
  {
  $registro = $resultado->fetch_array();
  $matriculaRetornada = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

  $sql = "SELECT * FROM $nomeDaTabela2 WHERE matricula_aluno = '$matriculaRetornada'";

  $resultado = $conexao->query($sql) or die($conexao->error);

  if($conexao->affected_rows == 0)
   {
   echo "<p> Caro usuário, o(a) aluno(a) de nome <span> $nomeAluno </span> está com matrícula válida, mas não frequenta nenhuma unidade curricular neste semestre. </p>";
   }
  else
   {
   echo "<table>
          <caption> Relação de unidades curriculares frequentadas pelo(a) aluno(a) <span> $nomeAluno </span> neste semestre </caption>
          <tr>
           <th> Código da UC </th>
           <th> Nome da UC </th>
           <th> Matrícula do aluno </th>
          </tr>";

   while($registro = $resultado->fetch_array())
    {
    $codigo       = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
    $uc           = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
    $matric       = htmlentities($registro[2], ENT_QUOTES, "UTF-8");    

    echo "<tr>
           <td> $codigo </td>
           <td> $uc </td>
           <td> $matric </td>
          </tr>";
    }
    echo "</table>";
   }
  }
