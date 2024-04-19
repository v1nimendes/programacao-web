function limparErroNome(objErroNome)
 {
 objErroNome.innerHTML = ""; 
 }

function limparErroSalario(objErroSal)
 {
 objErroSal.innerHTML = "";
 }


function validarDados(evento)
 {
 //acessar, por meio do DOM, os elementos do formulário que terão seu conteúdo validado
 let objNome    = document.getElementById("candidato");
 let objSalario = document.getElementById('salario');

 //umavez criados os objetos que representam as caixas de dados no formulário, usamos métodos e atributos adequados para acessar os dados digitados nestas caixas

 let nomeDigitado = objNome.value;
 let salarioDigitado = objSalario.value;

 //antes de seguir com a validação, vamos retirar os espaços em branco presentes nos dados digitados pelo usuário
 nomeDigitado = nomeDigitado.trim();
 salarioDigitado = salarioDigitado.trim();

 //para que o navegador mostre as mensagens de erro adequadas no formulário, devemos fazer com que o JavaScript acesse os labels criados para mostrar estas mensagens
 let objErroNome = document.getElementById('erro-nome');
 let objErroSal  = document.getElementById("erro-salario");

 //daqui em diante, nosso código vai testar se os dados do formulário estão corretos
 let erro = false;

 //primeiro teste - verificar se a caixa para o nome do candidato não está vazia
 if(nomeDigitado.length == 0)
  {
  erro = true;
  objErroNome.innerHTML = "Erro: campo nome não pode estar vazio!";
  }

 //testando se o campo do salário contém um valor numérico real
 let salarioConvertido = parseFloat(salarioDigitado);

 if(salarioDigitado != salarioConvertido)
  {
  erro = true;
  objErroSal.innerHTML = "Erro: o salário deve ser um valor real!";
  }


 if(erro)
  {
  //no caso de haver algum erro no preenchimento de dados do formulário, nosso código de validação deve interromper o evento submit, dando chance ao usuário de continuar no formulário e corrigir os dados informados. No caso de uma literal de função, o JavaScript sempre cria, automaticamente, um objeto que representa o evento associado à função. Vamos usar o método que aborta a execução deste evento
  evento.preventDefault();
  alert("Devido a erros na validação do formulário, os dados não foram enviados ao servidor. Corrija-os e tente novamente!");
  }

  //limpar as mensagens de erro quando o usuário clica nas caixas do formulário. Vamos usar o recurso de função anônima no JavaScript, no lugar da literal de função
  objNome.addEventListener("click", function()
                           {
                            limparErroNome(objErroNome);
                           });

  objSalario.addEventListener("click", function()
                              {
                              limparErroSalario(objErroSal);
                              });                      

 }