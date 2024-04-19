<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> POO com PHP </title>
</head>

<body>
<h1> Exemplo do uso de POO com PHP - integrando com formulário  </h1>

<form action="modelo2.php" method="post">
        <input type="text" name="nome-aluno" placeholder="Forneça o nome do aluno" autofocus>

        <label class="alinha"> Digite a nota1: </label>
        <input typer="number" name="nota1" min="0" max="10" step="0.1"> <br>

        <label class="alinha"> Digite a nota2: </label>
        <input typer="number" name="nota2" min="0" max="10" step="0.1"> <br>

        <button> Calcular média aritmética simples </button>

    </form>

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

$aluno1->nome = "Maria das Graças";
$aluno1->nota1 = 8.8;
$aluno1->nota2 = 6.4;

$aluno2->nome = "João de Almeida";
$aluno2->nota1 = 6;
$aluno2->nota2 = 10;

$mediaPrimeiroAluno = $aluno1->calcularMedia();
$mediaSegundoAluno = $aluno2->calcularMedia();

echo "<p> Média do primeiro aluno = $mediaPrimeiroAluno <br>
            Média do segundo aluno = $mediaSegundoAluno <br>
            Nome do primeiro aluno = $aluno1->nome <br>
            Nome do segundo aluno  = $aluno2->nome </p>";

?>


</body>
</html>