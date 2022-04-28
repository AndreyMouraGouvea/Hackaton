<?php

include 'connect.php';
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

    //new user

    function newUser($name, $email, $mobile, $password)
    {

        $sql = "INSERT INTO `tb_user` (nm_user, email, nr_telefone, ds_senha) 
            VALUES ('$name', '$email', '$mobile', '$password')";

        $result = mysqli_query($GLOBALS['con'], $sql);

        if ($result) {
            alert('Usuário inserido com sucesso!');
        } else {
            die(mysqli_error($GLOBALS['con']));
        }
    }


    $sql = "INSERT INTO `tb_user` (nm_user, email, nr_telefone, ds_senha) 
            VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        alert('Usuário inserido com sucesso!');
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
    <script src="https://kit.fontawesome.com/412c8816f1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="imagex/png" href="img/logo24px.png">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'JetBrains Mono', monospace;
        }
        .a{
            color: #FFFFFF;
        }
        .row, .col{
            boxsrder: 1px solid black;
        }
        h2{
            text-align: center;
        }
        .b{
            background-color: #2A7DBD;
        }
        .c{
            background-color:#0864B5;
        }
        .d{
            border: 1px solid black;
        }
        .e{
            padding-top: 10px;
        }
    </style>
    <title>CRUD</title>
</head>

<body>
    <!-- HEADER -->
    <!-- ------------------------------------//----------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #05377B;"">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="fa-solid fa-feather a"></i></a>
            
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 a">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Caléndário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Informações Úteis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">FAQ</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button class="btn btn-primary nav-item" href="#">Login</button>
                    <button class="btn btn-primary nav-item" href="#">Sign Up</button>
                    
                </span>
            </div>
        </div>
    </nav><br>


    
    <!-- CAROUSSEL -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://prioridadeabsoluta.org.br/wp-content/uploads/2019/05/fb-1200x600.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Estudantes das Etecs e Fatecs promovem ações solidárias em SP</h5>
                            <p style='font-weight: 400'>Arrecadação de alimentos para as famílias da comunidade de Heliópolis (SP) e envio de absorventes são algumas das iniciativas</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.hojeemdia.com.br/image/policy:1.206658.1628425631:1628425631/image.jpg?f=2x1&w=1200&" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Professor de Etec em Americana é afastado após áudio com falas homofóbicas</h5>
                            <p style='font-weight: 400'>Em conversa com a EPTV, docente negou que tenha feito um discurso de ódio e disse que foi mal interpretado. Estudantes organizaram protesto nesta sexta-feira</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.odysci.com/wp-content/uploads/2020/06/protestos_img-1200x600.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Forros de áreas e salas de Etec de São Carlos desabam</h5>
                            <p style='font-weight: 400'>Estudantes estão preocupados com rachaduras, infiltrações e outros problemas. Centro Paula Souza diz que nos próximos dias começam serviços para recuperação do forro danificado.</p>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Cursos -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>Médio com Habilitação Técnica</h2>
                </div>
                <div class="col d">
                    <h2>Cursos Técnicos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d">
                    <ul>
                        <li>ETIM - Administração</li>
                        <li>ETIM - Desenvolvimento de Sistemas</li>
                        <li>MTEC- Programação de Jogos Digitais</li>
                    </ul>
                </div>
                <div class="col d">
                    <ul>
                        <li>Técnico em Administração</li>
                        <li>Técnico em Contabilidade</li>
                        <li>Técnico em Edificações</li>
                        <li>Técnico em Turismo Receptivo</li>
                    </ul>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Calendário -->
    <!-- ----------------------------------------//------------------------- -->

    <div class="container b d">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>Calendário Vestibulinho</h2>
                </div>
            </div>
            <div class="row c">
                <div class="col b e">
                    <h5>
                        <ul>
                            <li>14/12/2022: Liberação da lista preliminar das inscrições deferidas e indeferidas</li><p>
                            <li>23/12/2022: Liberação da análise dos recursos e das retificações de notas/documentos</li><p>
                            <li>03/01/2022: Liberação da classificação geral dos cursos com prova de aptidão on-line e da convocação para a prova de aptidão</li><p>
                            <li>04/01/2022: Prova de aptidão on-line</li><p>
                            <li>10/01/2022: Liberação da lista de classificação geral dos demais cursos e do resultado da prova de aptidão on-line e convocação para envio dos documentos de matrícula da 1ª Lista de Convocação</li><p>
                            <li>De 11/01 até 13/01/2022: Início das matrículas da 1ª Lista de Convocação dos candidatos com envio de documentação de matrícula</li><p>
                            <br>
                            Em atualização...
                        </ul>
                    </h5>
                </div>
            </div>
        </div>    
    </div>

    <!-- Cursos -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>Médio com Habilitação Técnica</h2>
                </div>
                <div class="col d">
                    <h2>Cursos Técnicos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d">
                    <ul>
                        <li>ETIM - Administração</li>
                        <li>ETIM - Desenvolvimento de Sistemas</li>
                        <li>MTEC- Programação de Jogos Digitais</li>
                    </ul>
                </div>
                <div class="col d">
                    <ul>
                        <li>Técnico em Administração</li>
                        <li>Técnico em Contabilidade</li>
                        <li>Técnico em Edificações</li>
                        <li>Técnico em Turismo Receptivo</li>
                    </ul>
                </div>
            </div>
        </div>    
    </div><br>

</body>

</html>