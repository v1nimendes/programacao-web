//abaixo, vemos a declaração de variáveis por meio da diretiva let, que restringe muito o escopo destas variáveis. JavaScript não tem declaração de tipos de dados
let minhaIdade;
let meuNome;
let mensagem;

minhaIdade = prompt("Digite a sua idade:");
meuNome    = prompt("Digite seu nome:");
mensagem   = "Olá, " + meuNome + ", Bem-vindo(a)! Sua idade é igual a " + minhaIdade + " anos."; 
alert(mensagem);
