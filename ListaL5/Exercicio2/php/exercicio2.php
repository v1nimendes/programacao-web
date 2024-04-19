<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> MySQL + PHP - modelo 2 </h1>

 <form action="exercicio2.php" method="post">
  <fieldset>
   <legend> Cadastro de produtos </legend>

   <label class="alinha"> ID: </label>
   <input type="text" name="id" autofocus placeholder="Forneça o código do produto"> <br>

   <label class="alinha"> Preço unitário: </label>
   <input type="number" name="preco" min="0" step="0.01"> <br>

   <label class="alinha"> Quantidade em estoque: </label>
   <input type="number" name="estoque" min="0"> <br>

   <label> Classificação do produto: </label> <br>
   <input type="radio" name="classificacao" value="Perecível"> <label> Produto perecível </label> <br>

   <input type="radio" name="classificacao" value="Não-perecível"> <label> Produto não-perecível </label> <br> <br>

   <label> Descrição do produto: </label>
   <textarea name="descricao"></textarea> <br>

   <button name="cadastrar"> Cadastrar produto </button>
  </fieldset>

  <fieldset>
   <legend> Outras operações sobre o Banco de Dados </legend>

   <div>
    <label> Escolha uma operação: </label>

    <select name="outras-operacoes">
    <option> Tabular dados </option>
    <option> Mostrar descrição </option>
    <option> Calcular faturamento </option>
    </select>  
   
    <button name="executar-operacao"> Executar operação selecionada </button>
   </div>
  </fieldset>
 </form>

 <?php
  //neste ponto do arquivo, antes de qualquer coisa, vamos chamar as includes que contêm todas as etapas de conexão com o banco de dados
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  //vamos, agora, descobrir qual botão foi selecionado no formulário e chamar a include adequada para executar tal operação
  if(isset($_POST['cadastrar']))
  {
  require "../includes/cadastrar.inc.php";
  }
  if(isset($_POST['executar-operacao']))
  {
    $operacao = $_POST['outras-operacoes'];

    if($operacao == "Tabular dados")
    {
      require "../includes/tabular-dados.inc.php";
    }
    if($operacao == "Mostrar descrição")
    {
      require "../includes/mostrar-descricao.inc.php";
    }
    if($operacao == "Calcular faturamento")
    {
      require "../includes/calcular-faturamento.inc.php";
    }
  }

  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html> 