<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> POO com PHP </title> 
</head> 

<body> 
 <h1> Noções de Orientação a Objetos na linguagem PHP </h1>

 <?php
  //criando a classe Alunos
  class Alunos 
   {
   //declaração dos atributos 
   public $nome;
   public $nota1;
   public $nota2;
   

   //métodos
   public function calcularMedia()
    {
    $media = ($this->nota1 + $this->nota2)/2; 
    return $media;
    }
   }

  //criar os objetos alunos

  $aluno1 = new Alunos();
  $aluno2 = new Alunos();

  $aluno1->nome  = "Maria das Graças";
  $aluno1->nota1 = 8.8;
  $aluno1->nota2 = 6.4;

  $aluno2->nome  = "João de Almeida";
  $aluno2->nota1 = 6;
  $aluno2->nota2 = 10;

  $mediaPrimeiroAluno = $aluno1->calcularMedia();
  $mediaSegundoAluno  = $aluno2->calcularMedia();

  echo "<p> Média do primeiro aluno = $mediaPrimeiroAluno <br>
            Média do segundo aluno = $mediaSegundoAluno <br>
            Nome do primeiro aluno = $aluno1->nome <br>
            Nome do segundo aluno  = $aluno2->nome </p>";
 ?>    
</body> 
</html> 