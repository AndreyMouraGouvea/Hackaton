<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `tb_user` WHERE id_user = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['nm_user'];
$email = $row['email'];
$mobile = $row['nr_telefone'];
$password = $row['ds_senha'];


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // alert function

    function alert($msg)
    {
        echo '<script>alert("' . $msg . '")</script>';
    }

    //action page

    function page($pagina)
    {
        echo '<script>window.location = "' . $pagina . '"</script>';
    }


    function updateUser($name, $email, $mobile, $password, $id)
    {

        $sql = "UPDATE `tb_user` SET 
        id_user = '$id',
        nm_user = '$name',
        email = '$email',
        nr_telefone = '$mobile',
        ds_senha = '$password' 
        WHERE id_user = '$id'
        ";

        $result = mysqli_query($GLOBALS['con'], $sql);

        if ($result) {
            alert('Usuário atualizado com sucesso!');
        } else {
            die(mysqli_error($GLOBALS['con']));
        }
    }


    $sql = "UPDATE `tb_user` SET 
     id_user = '$id',
     nm_user = '$name',
     email = '$email',
     nr_telefone = '$mobile',
     ds_senha = '$password' 
     WHERE id_user = '$id'
     ";

    $result = mysqli_query($con, $sql);

    if ($result) {
        alert('Usuário atualizado com sucesso!');
        page('display.php');
        //header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}

// id_user, nm_user, email, nr_telefone, ds_senha
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label class='my-2'>Nome: </label>
                <input type='text' class='form-control' placeholder="Escreva o seu nome" name='name' autocomplete="off"
                value=<?php echo $name; ?>
                >
            </div>

            <div class="form-group">
                <label class='my-2'>Email: </label>
                <input type='email' class='form-control' placeholder="Escreva o seu email" name='email' autocomplete="off"
                value=<?php echo $email; ?>
                >
                
            </div>

            <div class="form-group">
                <label class='my-2'>Telefone: </label>
                <input type='text' class='form-control' placeholder="Escreva o seu telefone" name='mobile' autocomplete="off"
                value=<?php echo $mobile; ?>
                >
            </div>

            <div class="form-group">
                <label class='my-2'>Senha: </label>
                <input type='password' class='form-control' placeholder="Escreva a sua senha" name='password' autocomplete="off"
                value=<?php echo $password; ?>
                >
                
            </div>

            <button type='submit' class='btn btn-primary my-2 btn-block' name='submit'>
                Atualizar</button>
        </form>
    </div>

</body>

</html>