<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Crud Operation</title>
</head>

<body>

    <div class="container">
        <button class='btn btn-primary my-5'>
            <a href='user.php' class='text-light' style="text-decoration: none;">Novo Usuário</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "SELECT * FROM `tb_user`";
                $result = mysqli_query($con, $sql);

                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id_user'];
                        $user = $row['nm_user'];
                        $email = $row['email'];
                        $mobile = $row['nr_telefone'];
                        $password = $row['ds_senha'];

                        echo '
                        
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$user.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                            <button class="btn btn-warning"><a href="update.php?updateid='.$id.'" class ="text-light"style="text-decoration: none;">Atualizar</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class=" text-light"style="text-decoration: none;">Deletar</a></button>
                            </td>
                        </tr>
                        
                        
                        ';
                    }
                }


                ?>

                


            </tbody>
        </table>
    </div>







</body>

</html>