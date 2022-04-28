<?php

function alert($msg){
    echo '<script>alert("'.$msg.'");</script>';
}

function page($pagina) {

    echo '<script>window.location= "'.$pagina.'"</script>';
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// $msg = "Nome: ".$name. "\r\n".
//         "Email: ".$email. "\r\n".
$msg = "Mensagem de carinho: ".$message. "\r\n" 
        .$name. ", você passou na etec! \r\n".
        "Você tem até o dia 10 de janeiro para concluir a sua inscrição"   ;
        

  //criando var //concatenando var
        if(mail($email, "Vestibulinho Etec - Etec de Peruibe - Owl Company©™",$msg)){
            alert("Email enviado com sucesso!");
            page('display.php');
        }
        else{
            alert("Falha ao enviar o email");
        }
