<?php
 class Alunos 
  {
  public $aluno;
  public $nota1;
  public $nota2;

  //método para receber os dados do aluno - métodos como este, que recebem dados e deslocam estes dados para os atributos do objeto são classificados como métodos getters
  public function receberDados()
   {
   $this->aluno = $_POST["nome-aluno"];
   $this->nota1 = $_POST["nota1"];
   $this->nota2 = $_POST['nota2'];
   }

  function calcularMedia()
   {
   $media = ($this->nota1 + $this->nota2)/2;
   return $media; 
   }
  
  //os métodos destinados a mostrar informações do processamento feito com os dados de um objeto são classificados como métodos setters
  function mostrarResultados($media)
   {
   echo "<p> Resultado do rendimento do aluno: <br>
             Aluno = <span> $this->aluno </span> <br>
             Nota 1 = <span> $this->nota1 </span> <br>
             Nota 2 = <span> $this->nota2 </span> <br>
             Média do aluno = <span> $media </span> </p>";
   }
  }