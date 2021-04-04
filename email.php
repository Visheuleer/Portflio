<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['msg']);

    $to = "jonaseuler98@gmail.com";
    $subject = "Contato - Portfólio";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email."\n".
            "Mensagem: ".$mensagem;

    $header = "From: jonas@000webhostapp.com"."\r\n"."Replay-To: ".$email."\e\n"."X=Mailer:PHP/".phpversion();
    
if(mail($to, $subject, $body, $header)){
    echo("Email foi enviado com sucesso");
}else{
    echo("Email não pode ser enviado");
}
}
    
?>