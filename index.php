<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="img/logo24px.png"/>

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
            <a class="navbar-brand"><i class="fa-solid fa-feather a"></i></a>
            
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 a">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cal">Caléndário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#info">Informações Úteis</a>
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
                            <h6><p style='font-weight: 400'>Arrecadação de alimentos para as famílias da comunidade de Heliópolis (SP) e envio de absorventes são algumas das iniciativas</p></h6>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.odysci.com/wp-content/uploads/2020/06/protestos_img-1200x600.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Professor de Etec em Americana é afastado após áudio com falas homofóbicas</h5>
                            <h6><p style='font-weight: 400'>Em conversa com a EPTV, docente negou que tenha feito um discurso de ódio e disse que foi mal interpretado. Estudantes organizaram protesto nesta sexta-feira</p></h6>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.hojeemdia.com.br/image/policy:1.206658.1628425631:1628425631/image.jpg?f=2x1&w=1200&" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style='font-weight: 500'>Forros de áreas e salas de Etec de São Carlos desabam</h5>
                            <h6><p style='font-weight: 400'>Estudantes estão preocupados com rachaduras, infiltrações e outros problemas. Centro Paula Souza diz que nos próximos dias começam serviços para recuperação do forro danificado.</p></h6>
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
                    <h4>Médio com Habilitação Técnica</h4>
                </div>
                <div class="col d">
                    <h2>Cursos Técnicos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d e">
                    <ul>
                        <li>ETIM - Administração</li>
                        <li>ETIM - Desenvolvimento de Sistemas</li>
                        <li>MTEC - Programação de Jogos Digitais</li>
                    </ul>
                </div>
                <div class="col d e">
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
    <div class="container" id="cal">
        <div class="col">
            <div class="row">
                <div class="col c d">
                    <h2>Calendário Vestibulinho</h2>
                </div>
            </div>
            <div class="row b">
                <div class="col d e">
                    <h5>
                        <ul>
                            <li>14/12/2022: Liberação da lista preliminar das inscrições deferidas e indeferidas</li><p>
                            <li>23/12/2022: Liberação da análise dos recursos e das retificações de notas/documentos</li><p>
                            <li>03/01/2022: Liberação da classificação geral dos cursos com prova de aptidão on-line e da convocação para a prova de aptidão</li><p>
                            <li>04/01/2022: Prova de aptidão on-line</li><p>
                            <li>10/01/2022: Liberação da lista de classificação geral dos demais cursos e do resultado da prova de aptidão on-line e convocação para envio dos documentos de matrícula da 1ª Lista de Convocação</li><p>
                            <li>De 11/01 até 13/01/2022: Início das matrículas da 1ª Lista de Convocação dos candidatos com envio de documentação de matrícula</li><p>
                            <br>
                            <center>Em atualização...</center>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>    
    </div><br>

    <!-- Informações -->
    <!-- ----------------------------------------//------------------------- -->
    <div class="container b d" id="info">
        <div class="col">
            <div class="row c">
                <div class="col d">
                    <h2>Informações Úteis</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d">
                    <ul>
                        <li>Nível de ensino: O nível de ensino do Centro Paula Souza, é superior ao ensino das escolas públicas, sejam elas estaduais ou municipais. As Etec’s contam com uma equipe de professores especializados em suas respectivas áreas, aulas práticas e formação técnica ao concluir o curso;</li>
                        <li>Confirmação de Vocação: na Etec de Peruíbe, a cada ganha-se um certificado de formação na área;</li>
                        <li>Vestibulinho: são 50 questões com de múltiplas escolhas, com duração de 4 horas. As matérias contidas na prova estão de acordo com a BNCC;</li>
                        <li>Documentos Necessários: RG, CPF, Foto 3X4, Comprovante de escolaridade e Histórico Escolar com certificado de conclusão de ensino fundamental;</li>
                        <li>Inclusão social: são vantagens no sistema de pontuação para algumas pessoas. Alunos afrodescendentes ganham 3% de bônus e alunos oriundos da rede pública ganham 10%. Caso o aluno esteja nas duas situações, recebe 13% de bônus. Para ter direito ao bônus, o aluno afrodescendente deve fazer autodeclaração no ato da inscrição;</li>
                        <li>O Vestibulinho Etec é feito 2 vezes ao ano, no primeiro semestre dedicado aos cursos técnicos, e no segundo semestre dedicado aos cursos técnicos e ao ensino médio com habilitação técnica.</li>

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
                    <h2>Dúvidas Frequentes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col e">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <h4>1. Quando acontece o próximo Vestibulinho? E o próximo Vestibular?</h4>
                        <p>Os processos seletivos são semestrais. Informações sobre datas no site do Vestibulinho ou do Vestibular.</p>
                        <h4>2. Onde encontro as grades curriculares dos cursos?</h4>
                        <p>Conheça o perfil dos cursos técnicos e tecnológicos oferecidos pelo Centro Paula Souza no site da instituição. Para informações sobre grade curricular, entre em contato direto com a unidade que fornece o curso.</p>
                        <h4>3. Como ingresso em uma Etec?</h4>
                        <p>O ingresso nas unidades do CPS se dá através de processos seletivos, o Vestibulinho. Para candidatar-se ao ensino técnico das Etecs o aluno deverá ter concluído ou estar cursando a partir do 2ª ano do ensino médio</p>
                        <h4>4. É obrigatório o uso do uniforme nas Etecs?</h4>
                        <p>O uso de uniforme nas Etecs não é obrigatório, de acordo com a Lei 3913 de 14/11/1983.</p>
                    </div>
                </div>
                <div class="col e">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <h4>5. Existe a possibilidade de um aluno entrar para o Ensino Médio no meio do ano?</h4>
                        <p>Não. O Vestibulinho para o Ensino Médio das Etecs é anual e ocorre no final de cada ano letivo.</p>
                        <h4>6. Qual a diferença entre os Vestibulinho do meio do ano e de fim de ano?</h4>
                        <p>No processo seletivo para o 1° semestre é oferecido Ensino Médio e Ensino Técnico. No 2° semestre, apenas Ensino Técnico.</p>
                        <h4>7. É possível entrar no 2° ano do Ensino Médio em uma Etec? (Vagas Remanescentes)</h4>
                        <p>Sim. Entre em contato direto com a unidade onde pretende estudar. Cada uma tem processo seletivo próprio para vagas remanescentes.</p>
                        <h4>8. Qual a duração de um curso técnico e de um curso tecnológico?</h4>
                        <p>A duração dos cursos técnicos oferecidos nas Etecs varia de 3 a 4 semestres. Os cursos de graduação tecnológica oferecidos pelas Fatecs têm uma carga horária de 2.400 horas, com três anos de duração.</p>
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
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Aqui na Etec temos liberdade. Essa liberdade torna os alunos independentes, criativos e mais humanos, tornando assim um local mais agradável.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Professora Pamela</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">O que mais me agrada na Etec de Peruíbe é o espaço oferecido para a fromação do aluno como cidadão. A conquista da autonomia através da expressão e compartilhamento de suas realidades é o diferencial da escola.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Professora Meire</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">O ponto forte da Etec de Peruíbe é a diversidade de cursos para atender aos diversos interesses e possibilidades da população local.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluna Natália Campioni</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">A Etec me trouxe novas oportunidades e muitos conhecimentos, foi na Etec onde eu aprendi a ter mais responsabilidades. Me sinto mais preparada para o mercado de trabalho, pois agora já tenho uma ideia do que eu irei enfrentar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluna Gabrielle Souza</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Com a Etec eu consegui ter várias experiências de como será minha vida profissional, com palestras e eventos, a Etec nos prepara para o mercado de trabalho.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/6.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aluno Thiago Kardec</h5>
                                    <h3><i class="fa-solid fa-quote-left"></i></h3><p class="card-text">Aqui na Etec você pode aprender diversos cursos. Não vai se arrepender de entrar na Etec, venha fazer o vestibulinho e tenha novas experiências!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
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
                        <a class="nav-link active f" href="http://etecperuibe.com.br/">Etec de Peruíbe</a>
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
                <li class="nav-item"><a href="#home" class="nav-link px-2 text-muted">Home • </a></li>
                <li class="nav-item"><a href="#cursos" class="nav-link px-2 text-muted">Cursos • </a></li>
                <li class="nav-item"><a href="#cal" class="nav-link px-2 text-muted">Calendário • </a></li>
                <li class="nav-item"><a href="#info" class="nav-link px-2 text-muted">Informações Úteis • </a></li>
                <li class="nav-item"><a href="#faq" class="nav-link px-2 text-muted">FAQs • </a></li>
                <li class="nav-item"><a href="#link" class="nav-link px-2 text-muted">Links Oficiais</a></li>                
            </ul>
            <p class="text-center text-muted">Owl Company <i class="fa-solid fa-feather"></i> + Etec de Peruíbe, <i class="fa-solid fa-copyright"></i> 2022 - 2022</p>
        </footer>
</body>
</html>