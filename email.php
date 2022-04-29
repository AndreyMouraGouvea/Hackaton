<?php

include('connect.php');

function alert($msg){
    echo '<script>alert("'.$msg.'");</script>';
}

function page($pagina) {

    echo '<script>window.location= "'.$pagina.'"</script>';
}



function newUser($name, $email)
{

    $sql = "INSERT INTO `tb_user` (nm_user, email) 
        VALUES ('$name', '$email')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        alert('Usuário inserido com sucesso!');
        page('index.php');
    } else {
        die(mysqli_error($con));
    }
}

$name = $_POST['name'];
$email = $_POST['email'];

// $msg = "Nome: ".$name. "\r\n".
//         "Email: ".$email. "\r\n".
$msg = "Olá, ".$name. ", você passou na etec! \r\n".
        "Você tem até o dia 10 de janeiro para concluir a sua inscrição"   ;
        

  //criando var //concatenando var
        if(mail($email, "Vestibulinho Etec - Etec de Peruibe - Owl Company©™",$msg)){
                alert("Email enviado com sucesso!");
                page('index.php');
         }
        else{
            alert("Falha ao enviar o email");
        }
?>