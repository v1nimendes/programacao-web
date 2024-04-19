function trocaTema()
 {
 //acessar a tag link, pois, sem ela, o JS não consegue trocar o arquivo css
 let objLink = document.getElementById("arquivo-css");

 //salvar o nome do tema original na tag link
 let href = objLink.getAttribute("href");

 //testar qual tema está em uso no documento
 if(href == "tema1.css")
  {
  objLink.setAttribute("href", "tema2.css");
  }

 else
  {
   objLink.setAttribute("href", "tema1.css");
  }
 }


let objBotao = document.getElementById("botao");
objBotao.addEventListener("click", trocaTema);