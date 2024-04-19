
function extrairRaiz(objNumero, objParagrafo)
 {
 //acessando o valor do número digitado no formulário
 let numero = objNumero.value;
 let raiz   = Math.sqrt(numero); 

 //podemos, em JS, fazer a formatação de valores numéricos, controlando tanto o número de casas decimais quanto o tipo de sepador usado
 raiz = raiz.toLocaleString("pt-br", {maximumFractionDigits:1});

 //fazendo o JS mostrar o valor da raiz dentro do parágrafo na página web
 objParagrafo.innerHTML = "A raiz quadrada de <span>" + numero + "</span> é igual a <span> " + raiz + "</span>"; 

 //aqui, o parágrafo está invisível. Fazemos o JS torná-lo visível inserindo a classe mostra no parágrafo
 objParagrafo.setAttribute("class", "mostra");
 }

function mostrarEsconder(objParagrafo)
 {
 //fazendo o JS recuperar, da tag <p>, o valor da classe mostra
 let classe = objParagrafo.getAttribute("class");

 //agora, testamos o valor da variável classe. Se ela for verdadeira, o parágrafo está visível. Mandamos o JS escondê-lo. Se a variável classe for nulo ou falso, o parágrafo está invisível. Mandamos o JS exibi-lo
 if(classe)
  {
  //o parágrafo já esta aparecendo. Vamos torná-lo invisível
  objParagrafo.setAttribute("class", "");
  }
 else
  {
  //o parágrafo está invisível. Vamos mostrá-lo
  objParagrafo.setAttribute("class", "mostra");
  }
 }

//criando os objetos que representam elementos do documento web, os quais devem ser manipulados pelo JS
let objNumero = document.getElementById("numero");
let objBotao1 = document.getElementById("botao1");
let objBotao2 = document.getElementById("botao2");
let objParagrafo = document.getElementById("mostrar-raiz");

//associando os eventos aos objetos criados acima
objBotao1.addEventListener("click", function()
                               {
                                extrairRaiz(objNumero, objParagrafo);
                               });

objBotao2.addEventListener("click", function()
                                {
                                mostrarEsconder(objParagrafo);
                                });