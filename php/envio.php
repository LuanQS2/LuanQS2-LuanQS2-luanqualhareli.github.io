<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "luanqsegura1@gmail.com";
    $assunto = "Contato - Luan";

    $corpo = "Nome: ".$nome."\n"
            ."E-mail: ".$email."\n"
            ."Celular: ".$celular."\n"
            ."Mensagem".$mensagem;

    $cabeca = "From: luanqs35@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }


?>