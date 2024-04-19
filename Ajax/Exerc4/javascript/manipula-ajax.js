function recebeMedicos()
{
//vamos acessar a tag que representa o módulo de cadastro de pacientes, para desativá-lo do formulário
let objFieldset = document.getElementById("cadastro-pacientes");
objFieldset.disabled = true; 

//vamos acessar o objeto select, que irá receber o crm dos médicos cadastrados pelo PHP no banco de dados
let objSelect = document.getElementById("select-medicos");

//criamos o objeto ajax
let ajax  = new XMLHttpRequest();

//dizemos ao objeto ajax qual arquivo será executado pelo PHP no servidor - que é o arquivo que contém os comandos para o PHP buscar no banco de dados, o CRM dos médicos cadastrados 
ajax.open("GET", "../includes/busca-medicos.inc.php", true); 

ajax.send(null); //enviamos o ajax ao servidor para recuperar os CRMs 

//o JavaScript fica "escutando" até que o ajax retorne a máquina-cliente com os dados recebidos do servidor
ajax.onload = function()
{
//os comandos dentro dessa função anônima são executados pelo JS enquanto o ajax está viajando de volta ao servidor
if(ajax.status == 200)
{
objSelect.innerHTML = ajax.responseText;

//se a resposta do ajax for diferente de zero, ativamos o fieldset com o cadastro dos pacientes
if(ajax.responseText != "0")
{
   objFieldset.disabled = false;
}
}
};
 
}


//após a página com o formulário ser completamente carrwgada pelo navegador, acionamos o evento de load, que executa a função especificada abaixo 
window.addEventListener("load", recebeMedicos);