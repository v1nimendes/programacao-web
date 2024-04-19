
function trataNumeros(objIdade, objSaldo, objResposta)
 {
 //acessando os números digitados nas duas caixas do formulário
 let idade = objIdade.value;
 let saldo = objSaldo.value; 
 
 let idadeConvertida = parseInt(idade);
 let saldoConvertido = parseFloat(saldo);

 let soma  = idadeConvertida + saldoConvertido; //cuidado, aqui, com a soma

 if(idadeConvertida == idade && saldoConvertido == saldo)
  {
  objResposta.innerHTML = "Valor da soma = " + soma;
  }

 else
  {
  objResposta.innerHTML = "OPS! Erro no fornecimento dos dados numéricos. Digite-os novamente!"; 
  }
 }

let objIdade = document.getElementById("idade");
let objSaldo = document.getElementById("saldo");
let objResposta = document.getElementById("resposta");
let objBotao = document.getElementById('botao');


//associar o evento click ao botão do formulário
objBotao.addEventListener("click", function()
     {
     trataNumeros(objIdade, objSaldo, objResposta);
     });
