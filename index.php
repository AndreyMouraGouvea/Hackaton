<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="img/logo.png"/>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/412c8816f1.js" crossorigin="anonymous"></script>

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
        h1, h2, h4{
            text-align: center;
            color: white;
        }
        .b{
            background-color: #48A5DB;
        }
        .c{
            background-color:#0864B5;
        }
        .d{
            border: 1px solid black;
        }
        .e{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .f{
            color: black;
        }
        p{
            text-align: center;
        }
        .g{
            text-align: center;
        }
    </style>
    <title>Vestibulinho Etec</title>
</head>

<body>
    <!-- HEADER -->
    <!-- ------------------------------------//----------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #05377B;"">
        <div class="container-fluid" id="home">
            <a class="navbar-brand"><img src="http://etecperuibe.com.br/wp-content/uploads/2021/02/Negativa.png" style="width: 50px; height: 30px;"></a>
            
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 a">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cal">Cal??nd??rio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#info">Informa????es ??teis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#faq">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#link">Links Oficiais</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button class="btn btn-primary nav-item" href="#">Login</button>
                    <button class="btn btn-primary nav-item"><a href="#cadastro" style="text-decoration: none">Cadastro</a></button>
                    
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
                            <h5 style='font-weight: 500'>Estudantes das Etecs e Fatecs promovem a????es solid??rias em SP</h5>
                            <h6><p style='font-weight: 400'>Arrecada????o de alimentos para as fam??lias da comunidade de Heli??polis (SP) e envio de absorventes s??o algumas das iniciativas</p></h6>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.odysci.com/wp-content/uploads/2020/06/protestos_img-1200x600.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Professor de Etec em Americana ?? afastado ap??s ??udio com falas homof??bicas</h5>
                            <h6><p style='font-weight: 400'>Em conversa com a EPTV, docente negou que tenha feito um discurso de ??dio e disse que foi mal interpretado. Estudantes organizaram protesto nesta sexta-feira</p></h6>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.hojeemdia.com.br/image/policy:1.206658.1628425631:1628425631/image.jpg?f=2x1&w=1200&" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Forros de ??reas e salas de Etec de S??o Carlos desabam</h5>
                            <h6><p style='font-weight: 400'>Estudantes est??o preocupados com rachaduras, infiltra????es e outros problemas. Centro Paula Souza diz que nos pr??ximos dias come??am servi??os para recupera????o do forro danificado.</p></h6>
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
    <div class="container b d" id="cursos">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h1>Cursos</h1>
                </div>
            </div>
            <div class="row c">
                <div class="col d e">
                    <h4>M??dio com Habilita????o T??cnica</h4>
                </div>
                <div class="col d">
                    <h2>Cursos T??cnicos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d e">
                    <ul>
                        <li>ETIM - Administra????o</li>
                        <li>ETIM - Desenvolvimento de Sistemas</li>
                        <li>MTEC - Programa????o de Jogos Digitais</li>
                    </ul>
                </div>
                <div class="col d e">
                    <ul>
                        <li>T??cnico em Administra????o</li>
                        <li>T??cnico em Contabilidade</li>
                        <li>T??cnico em Edifica????es</li>
                        <li>T??cnico em Turismo Receptivo</li>
                    </ul>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Calend??rio -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container" id="cal">
        <div class="col">
            <div class="row">
                <div class="col c d">
                    <h2>Calend??rio Vestibulinho</h2>
                </div>
            </div>
            <div class="row b">
                <div class="col d e">
                    <h5>
                        <ul>
                            <li>14/12/2022: Libera????o da lista preliminar das inscri????es deferidas e indeferidas</li><p>
                            <li>23/12/2022: Libera????o da an??lise dos recursos e das retifica????es de notas/documentos</li><p>
                            <li>03/01/2022: Libera????o da classifica????o geral dos cursos com prova de aptid??o on-line e da convoca????o para a prova de aptid??o</li><p>
                            <li>04/01/2022: Prova de aptid??o on-line</li><p>
                            <li>10/01/2022: Libera????o da lista de classifica????o geral dos demais cursos e do resultado da prova de aptid??o on-line e convoca????o para envio dos documentos de matr??cula da 1?? Lista de Convoca????o</li><p>
                            <li>De 11/01 at?? 13/01/2022: In??cio das matr??culas da 1?? Lista de Convoca????o dos candidatos com envio de documenta????o de matr??cula</li><p>
                            <br>
                            <center>Em atualiza????o...</center>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Informa????es -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d" id="info">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>Informa????es ??teis</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d">
                    <ul>
                        <li>N??vel de ensino: O n??vel de ensino do Centro Paula Souza, ?? superior ao ensino das escolas p??blicas, sejam elas estaduais ou municipais. As Etec???s contam com uma equipe de professores especializados em suas respectivas ??reas, aulas pr??ticas e forma????o t??cnica ao concluir o curso;</li>
                        <li>Confirma????o de Voca????o: na Etec de Peru??be, a cada ganha-se um certificado de forma????o na ??rea;</li>
                        <li>Vestibulinho: s??o 50 quest??es com de m??ltiplas escolhas, com dura????o de 4 horas. As mat??rias contidas na prova est??o de acordo com a BNCC;</li>
                        <li>Documentos Necess??rios: RG, CPF, Foto 3X4, Comprovante de escolaridade e Hist??rico Escolar com certificado de conclus??o de ensino fundamental;</li>
                        <li>Inclus??o social: s??o vantagens no sistema de pontua????o para algumas pessoas. Alunos afrodescendentes ganham 3% de b??nus e alunos oriundos da rede p??blica ganham 10%. Caso o aluno esteja nas duas situa????es, recebe 13% de b??nus. Para ter direito ao b??nus, o aluno afrodescendente deve fazer autodeclara????o no ato da inscri????o;</li>
                        <li>O Vestibulinho Etec ?? feito 2 vezes ao ano, no primeiro semestre dedicado aos cursos t??cnicos, e no segundo semestre dedicado aos cursos t??cnicos e ao ensino m??dio com habilita????o t??cnica.</li>

                    </ul>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Faq -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d" id="faq"> 
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>D??vidas Frequentes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col e">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <h4>1. Quando acontece o pr??ximo Vestibulinho? E o pr??ximo Vestibular?</h4>
                        <p>Os processos seletivos s??o semestrais. Informa????es sobre datas no site do Vestibulinho ou do Vestibular.</p>
                        <h4>2. Onde encontro as grades curriculares dos cursos?</h4>
                        <p>Conhe??a o perfil dos cursos t??cnicos e tecnol??gicos oferecidos pelo Centro Paula Souza no site da institui????o. Para informa????es sobre grade curricular, entre em contato direto com a unidade que fornece o curso.</p>
                        <h4>3. Como ingresso em uma Etec?</h4>
                        <p>O ingresso nas unidades do CPS se d?? atrav??s de processos seletivos, o Vestibulinho. Para candidatar-se ao ensino t??cnico das Etecs o aluno dever?? ter conclu??do ou estar cursando a partir do 2?? ano do ensino m??dio</p>
                        <h4>4. ?? obrigat??rio o uso do uniforme nas Etecs?</h4>
                        <p>O uso de uniforme nas Etecs n??o ?? obrigat??rio, de acordo com a Lei 3913 de 14/11/1983.</p>
                    </div>
                </div>
                <div class="col e">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <h4>5. Existe a possibilidade de um aluno entrar para o Ensino M??dio no meio do ano?</h4>
                        <p>N??o. O Vestibulinho para o Ensino M??dio das Etecs ?? anual e ocorre no final de cada ano letivo.</p>
                        <h4>6. Qual a diferen??a entre os Vestibulinho do meio do ano e de fim de ano?</h4>
                        <p>No processo seletivo para o 1?? semestre ?? oferecido Ensino M??dio e Ensino T??cnico. No 2?? semestre, apenas Ensino T??cnico.</p>
                        <h4>7. ?? poss??vel entrar no 2?? ano do Ensino M??dio em uma Etec? (Vagas Remanescentes)</h4>
                        <p>Sim. Entre em contato direto com a unidade onde pretende estudar. Cada uma tem processo seletivo pr??prio para vagas remanescentes.</p>
                        <h4>8. Qual a dura????o de um curso t??cnico e de um curso tecnol??gico?</h4>
                        <p>A dura????o dos cursos t??cnicos oferecidos nas Etecs varia de 3 a 4 semestres. Os cursos de gradua????o tecnol??gica oferecidos pelas Fatecs t??m uma carga hor??ria de 2.400 horas, com tr??s anos de dura????o.</p>
                    </div>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Depoimentos -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d">
        <div class="col">
             <div class="row c">
                <div class="col d">
                    <h2>Relatos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-3 g-4 e">
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/1.png" class="card-img-top" alt="..." height="308px">
                                <div class="card-body">
                                    <h5 class="card-title">Professor Luiz Fernando</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Aqui na Etec temos liberdade. Essa liberdade torna os alunos independentes, criativos e mais humanos, tornando assim um local mais agrad??vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Professora Pamela</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">O que mais me agrada na Etec de Peru??be ?? o espa??o oferecido para a forma????o do aluno como cidad??o. A conquista da autonomia atrav??s da express??o e compartilhamento de suas realidades ?? o diferencial da escola.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Professora Meire</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">O ponto forte da Etec de Peru??be ?? a diversidade de cursos para atender aos diversos interesses e possibilidades da popula????o local.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluna Nat??lia Campioni</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">A Etec me trouxe novas oportunidades e muitos conhecimentos, foi na Etec onde eu aprendi a ter mais responsabilidades. Me sinto mais preparada para o mercado de trabalho, pois agora j?? tenho uma ideia do que eu irei enfrentar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluna Gabrielle Souza</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Com a Etec eu consegui ter v??rias experi??ncias de como ser?? minha vida profissional, com palestras e eventos, a Etec nos prepara para o mercado de trabalho.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/6.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluno Thiago Kardec</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Aqui na Etec voc?? pode aprender diversos cursos. N??o vai se arrepender de entrar na Etec, venha fazer o vestibulinho e tenha novas experi??ncias!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </div><br>

    <!-- Cadastro -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d" id="cadastro">
        <div class="col">
             <div class="row c">
                <div class="col d">
                    <h2>Cadastro</h2>
                </div>
            </div>
            <div class="row e">
                <form method="POST" action='email.php'>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Nome" name='name' aria-label="Nome">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>    
                        <input type="text" class="form-control" placeholder="Email" name='email' aria-label="Email">
                    </div>  
                </div>
                <div class="col offset-11">
                    <button type="submit" class="btn btn-primary mb-3" id="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div><br>
    
    <!-- Link Oficial -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d" id="link">
        <div class="col">
             <div class="row c">
                <div class="col d">
                    <h2>Links Oficiais</h2>
                </div>
            </div>
            <div class="row">
                <div class="col offset-3">
                     <ul class="list-group list-group-horizontal">
                        <a class="nav-link active f" href="https://www.vestibulinhoetec.com.br/home/">Vestibulinho Etec</a>
                        <a class="nav-link active f" href="https://www.cps.sp.gov.br/">Centro Paula Souza</a>
                        <a class="nav-link active f" href="http://etecperuibe.com.br/">Etec de Peru??be</a>
                    </ul> 
                </div>                    
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#home" class="nav-link px-2 text-muted">Home ??? </a></li>
                <li class="nav-item"><a href="#cursos" class="nav-link px-2 text-muted">Cursos ??? </a></li>
                <li class="nav-item"><a href="#cal" class="nav-link px-2 text-muted">Calend??rio ??? </a></li>
                <li class="nav-item"><a href="#info" class="nav-link px-2 text-muted">Informa????es ??teis ??? </a></li>
                <li class="nav-item"><a href="#faq" class="nav-link px-2 text-muted">FAQs ??? </a></li>
                <li class="nav-item"><a href="#link" class="nav-link px-2 text-muted">Links Oficiais</a></li>                
            </ul>
            <p class="text-center text-muted">Owl Company <i class="fa-solid fa-feather"></i> + Etec de Peru??be, <i class="fa-solid fa-copyright"></i> 2022 - 2022</p>
        </footer>
</body>
</html>
