<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> E-mail com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> Envio de e-mails ao usuário com PHP </h1>

  <form action="enviar-email.php" method="post">
    <fieldset>
      <legend> Dados cadastrais do cliente </legend>
      <label class="alinha"> Nome do cliente: </label>
      <input type="text" name="cliente" placeholder="Forneça o nome do cliente" autofocus> <br>

      <label class="alinha"> Usuário: </label>
      <input type="text" name="usuario"> <br>

      <label class="alinha"> Senha: </label>
      <input type="password" name="senha"> <br>

      <label class="alinha"> Data de nascimento: </label>
      <input type="date" name="nascimento"> <br>

      <label class="alinha"> E-mail do usuário: </label>
      <input type="email" name="email"> <br>

      <button name='enviar-email'> Cadastrar dados </button>      
    </fieldset>
  </form>
  <?php
   //os seguintes comandos são necessários para usarmos o framework PHPMailer
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;  
   use PHPMailer\PHPMailer\Exception;  

   require "./PHPMailer/PHPMailer/src/Exception.php";
   require "./PHPMailer/PHPMailer/src/PHPMailer.php";
   require "./PHPMailer/PHPMailer/src/SMTP.php";

   if(isset($_POST['enviar-email']))
    {
    $emailDonaMaria = $_POST['email'];
    $nome = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    $nascimento = $_POST['nascimento'];

    //criamos um objeto email a partir do contrsutor da classe PHPMailer
    $email = new PHPMailer();

    //definindo o conjunto de símbolos utf-8 para as mensagens que enviaremos por e-mail ao cliente
    $email->CharSet = "UTF-8";

    //definindo o idioma padrão de nossas mensagens para o português brasileiro
    $email->setLanguage("pt-br");

    //métodos e propriedades para configuração do servidor de e-mail nosso (dos administradores)
    $email->Host = "smtp.gmail.com";
    $email->Username = "remetente.ifsc2016@gmail.com";
    $email->Password = "fklnacqzosdmcgny";
    $email->Port = 587; // ou 465
    $email->SMTPSecure = "tls"; //no caso de o tls não funcionar, use o SSL

    //declaramos ao servidor de e-mail da dona Maria que esta mensagem está no formato exigido pelos protocolos de envio de e-mail
    $email->isSMTP();

    //declaramos que estamos definindo todos os protocolos de autenticação de usuário
    $email->SMTPAuth = true;

    //dados da mensagem que será encaminhada por e-mail. Nossa mensagem enviará página em HTML
    $email->isHTML(true);

    //assunto da mensagem
    $email->Subject = "Teste de envio de e-mail para a Dona Maria com PHP";

    //dados do remetente (nós, administradores) no caso de a dona Maria clicar, lá no e-mail dela, no botão "Resposnder para"
    $email->addReplyTo("remetente.ifsc2016@gmail.com", "Empresas AAA");
    $email->SetFrom("remetente.ifsc2016@gmail.com", "Empresas AAA");

    //dados do e-mail da dona Maria - a linha 83 pode ser duplicada para enviar este mesmo e-mail para vários destinatários ao mesmo tempo. Uma linha para cada destinatário
    $email->AddAddress($emailDonaMaria, $nome);

    /*corpo da mensagem de e-mail. CUIDADO: se você neviar uma página completa em html em separado, desative o corpo do e-mail
    $email->Body = "<h1 style='color: blue; font-family: candara; font-style: italic;'> Caro(a) usuário(a) de nossa aplicação, $nome: </h1>
    <p> Agradecemos a inscrição em nosso curso online! Confira, abaixo, seus dados cadastrais: <br>
    Nome do inscrito = $nome <br>
    E-mail = $emailDonaMaria <br>
    Usuário = $usuario <br>
    Senha = $senha <br>
    Aniversário = $nascimento </p>";*/

    //para enviarmos uma página HTML externa completa para a dona Maria, escreva o comando abaixo
    $email->MsgHTML(file_get_contents("lancamentos.html"));

    //para enviarmos arquivos em anexo, olhe as linhas a seguir:
    //$email->AddAttachment("anexo1.txt");

    //testando se o envio do e-mail foi bem-sucedido
    if($email->Send())
     {
     echo "<p> Cadastro efetuado com sucesso em nosso curso online! Prezado cliente, abra sua conta de e-mail para conferir seus dados cadastrais. </p>";
     }
    else
     {
     echo "<p> E-mail não enviado. Erro = $email->ErrorInfo </p>";
     }

   }
  ?>
</body> 
</html> 