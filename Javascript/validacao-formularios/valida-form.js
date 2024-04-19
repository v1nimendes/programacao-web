//vamos declarar algumas variáveis que serão úteis, mais adiante, para mostrar as mensagens de erro no formulário
let objErroNome;
let objErroSal;

//fazendo o JavaScript acessar todo os elementos do formulário por meio do DOM - Document Object Model (Modelo de Objetos do Documento)

let objFormulario = document.getElementById("formulario");

//o JavaScript fica, constantemente, "ouvindo" qualquer evento disparado sobre a página web. Podemos associar este evento à execução de uma função específica. No nosso caso, o JavaScript irá interceptar o evento submit e chamar uma função que irá testar se os dados são válidos, ou não. Em sendo válidos, o navegador envia estes dados ao PHP no servidor. Se forem inválidos, o JavaScript desativa o evento submit e pede ao usuário para corrigir os dados errados
objFormulario.addEventListener("submit", validarDados);