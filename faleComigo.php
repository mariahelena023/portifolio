<?php
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $destino = "toledomiranda.maria23@gmail.com";
    $assunto = "Contato - Portifólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: toledomiranda.maria23@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabecalho)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
?>