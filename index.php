<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPSVS - Instituto Privado de Saúde Visão do Saber</title>
    <link rel="shortcut icon" href="img/logo1.jpg" type="image/x-icon">
   
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2? família= Lato:wght@300;900 & display=swap" rel="stylesheet">
<!--Css CDN bootrap 5-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--Bootstrap icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 <!--css do progeto-->
 <link rel="stylesheet" href="css/style.css">
<!--JavaScript Bootstrap-->

 </head>

<body>
   
    <!--NAVBAR-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a href="index.php" class="navbar-brand logo-text">
               <img src="img/logo21.png" alt="">
            </a>
            <button class="navbar-toggler bg-white mr-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navidation"
            >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="cursos.php" class="nav-link" aria-current="page">Cursos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Consultar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">PAUTA FINAL</a></li>
                      <li><a class="dropdown-item" href="#">QUADRO DE HONRA</a></li>
                      <li><a class="dropdown-item" href="#">LISTA DE ESTÁGIOS</a></li>
                      <li><a class="dropdown-item" href="#">LISTA DE ACESSO</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">PLANO CURRICULAR</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Inscrições
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item" href="Inscricaosuade.php">INSTITUTO MÉDIO PRIVADO DE SAUDE</a></li>
                      <li><a class="dropdown-item" href="InscricaoGestao.php">INSTITUTO MÉDIO PRIVADO DE GESTÃO</a></li>
                      <li><a class="dropdown-item" href="InscricaoPuniv.php">PUNIV PRÉ-UNIVERSITÁRIO</a></li>
                      
                    </ul>
                  </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">Portal do Estudante</a>
                </li>
                <li class="nav-item">
                    <a href="#contactos" class="nav-link" aria-current="page"><i class="bi bi-phone-flip text-white"></i> Contacte-nos</a>
                </li>
                <li class="nav-item">
                    <a href="#login" class="nav-link" aria-current="page"><i class="bi bi-box-arrow-in-right text-white"></i> entrar</a>
                </li>
                
            </ul>
        </div>
        </div>
    </nav>

    <!--HOME PAGE-->
    <section id="home">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white">SEJA BEM VINDO AO COMPLEXO ESCOLAR KAWANDA</h1>
                    <p class="text-white text-justify"><strong>Somos uma comunidade escolar em que todos fazem educação e participam da tarefa de educar. As atividades pedagógicas/educacionais são planejadas e realizadas coletivamente, com ação e responsabilidade dos envolvidos: famílias, professores, estudantes, funcionários, coordenação , orientação e direção. Dessa forma, assumimos uma prática de educação participativa, em que todos são criadores do seu trabalho.</strong></p>
                          <br>
                          <p class="text-white">
                            <strong class="text-white">Instituto médio técnico de saúde, Instituto médio privado de gestão <br> PUNIV - Pré-Universitário 
                            </strong>
                         </p>
                         <a href="cursos.php" class="btn btn-outline-info text-white p-3">VER MAIS <i class="bi bi-book-half"></i></a>
                </div>
            </div>
        </div>
    </section>

        <div class="col-md-12" id="mini-banners">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/quemSomos.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                   <p class="card-text secondary-color">
                                    Somos uma comunidade escolar em que todos fazem educação e participam da tarefa de educar. <br> As atividades pedagógicas/educacionais são planejadas e realizadas coletivamente, com ação e responsabilidade dos envolvidos: famílias, professores, estudantes, funcionários, coordenação , orientação e direção. Dessa forma, assumimos uma prática de educação participativa, em que todos são criadores do seu trabalho.    </p>
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-dark">Saber Mais</a>
                            </div>


                            <!--Modal de quem somos-->
                               <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">QUEM SOMOS</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <img src="img/quemSomos.png" class="card-img-top img-fluid" alt="...">
                                      <p>Cultivamos um ambiente intelectualmente desafiador, trabalhando na perspectiva de uma educação com qualidade, respeitável e construída a partir dos contextos da comunidade escolar.</p>
                                        <p>Cultivamos um ambiente intelectualmente desafiador, trabalhando na perspectiva de uma educação com qualidade, respeitável e construída a partir dos contextos da comunidade escolar.</p>
                                        <p>O desafio do projeto Escola Nossa é cotidiano; requer envolvimento e visão coletiva; implica exercício do diálogo na resolução de questões que envolvam posições divergentes; insere seus participantes- crianças, jovens e adultos- na vivência política de sua cidadania; e resulta no prazer de estar participando, efetivamente, da construção de um projeto educacional que, juntos, buscamos torná-lo melhor em qualidade afetiva e cognitiva.
Sentir que o mundo não está pronto e sim aberto a leituras e releituras, ajustes e adequações, é princípio inerente ao nosso projeto educacional. Mais de 33 anos nos separam da fundação. Crescemos em histórias, vivências e experiências. Acompanhamos de perto as transformações de um mundo repleto de estímulos e contradições.</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/Xj1Z7RJ.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                    <p class="card-text secondary-color">
                                        Para o COMPLEXO ESCOLAR KAWANDA, a Educação Infantil é considerada uma das mais importantes etapas 
                                        para a vida escolar dos alunos, pois é onde as crianças começam a interagir com pessoas e situações fora do contexto familiar. Acontece o desenvolvimento da personalidade, conhecimento do outro e confiança em si mesmo.  <br> Autonomia, relação de respeito, empatia, solidariedade, cooperação e sustentabilidade são valores que começamos a compartilhar desde cedo para serem cultivados durante toda a vida.
                                        </p>
                                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"  class="btn btn-dark">Saber Mais</a>
                            </div>

                                <!--Modal sobre nos-->
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">SOBRE O COMPLEXO EXCOLAR KAWANDA</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <img src="img/Xj1Z7RJ.png" class="card-img-top img-fluid" alt="...">
                                      <p>  Para o COMPLEXO ESCOLAR KAWANDA, a Educação Infantil é considerada uma das mais importantes etapas 
                                        para a vida escolar dos alunos, pois é onde as crianças começam a interagir com pessoas e situações fora do contexto familiar. Acontece o desenvolvimento da personalidade, conhecimento do outro e confiança em si mesmo.  <br> Autonomia, relação de respeito, empatia, solidariedade, cooperação e sustentabilidade são valores que começamos a compartilhar desde cedo para serem cultivados durante toda a vida.
                                     </p> 
                                    <p>Em nossa escola, na primeira etapa da vida escolar, nossos pequenos são rodeados de carinho, aconchego e cuidado. Oferecemos possibilidades de aprendizagem que gerarão curiosidade, descobertas, conhecimento do outro e confiança em si mesmo. Em espaço físico convidativo e divertido, as crianças vivenciam momentos de interação com atividades corporais, cristãs, recreação e aprendizado, onde desenvolvem habilidades essenciais para seu crescimento.

                                        Sabemos que um dos principais receios (e medos) dos responsáveis é a adaptação da criança à escola. Entretanto, na Escola Reizinho a nossa equipe é extremamente qualificada e está pronta para lidar com os desafios desse processo. Sabemos como agir em momentos de choro ou de resistência da criança. Todas as medidas são tomadas com sensibilidade e carinho, respeitando o sentimento que está presente.</p>
                                    
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center acreditar"> </i>
                        <img src="img/Missao-valores-visao-768x369.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="title">
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                      </div>
                                    <strong>Missão</strong></h3>
                                  <p class="card-text secondary-color">
                                    Ser um centro de excelência em pesquisa, estudos e divulgação de conhecimento em gestão e de soluções para você ter uma formação com excelência.

                                     </p>
                                     <h3 class="title">
                                        <div class="spinner-border text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                          </div> 
                                        <strong>Visão</strong></h3>
                                  <p class="card-text secondary-color">
                                    Equipe multidisciplinar que visa a melhoria contínua na entrega dos melhores resultados, buscando sempre a proatividade, inovação e ética profissional com a máxima segurança informacional e jurídica.
                                     </p>
                                    
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-dark">Saber Mais</a>
                            </div>



                             <!--Modal de visao missao e valores-->
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">MISSÃO, VISÃO & VALORES</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <img src="img/mvv.png" class="card-img-top img-fluid" alt="...">
                                    <div class="spinner-border text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                      </div>
                                    <strong class="text-dark">Missão</strong></h3>
                                  <p class="card-text secondary-color">
                                    Ser um centro de excelência em pesquisa, estudos e divulgação de conhecimento em gestão e de soluções para você ter uma formação com excelência.

                                     </p>

                                     <div class="spinner-border text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                          </div> 
                                        <strong class="text-dark">Visão</strong></h3>
                                  <p class="card-text secondary-color">
                                    Equipe multidisciplinar que visa a melhoria contínua na entrega dos melhores resultados, buscando sempre a proatividade, inovação e ética profissional com a máxima segurança informacional e jurídica.
                                     </p>
                                    
                                     <div class="spinner-border text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                          </div> 
                                        <strong class="text-dark">Valores</strong></h3>
                                  <p class="card-text secondary-color">
                                  Equipe multidisciplinar que visa a melhoria contínua na entrega dos melhores resultados, buscando sempre a proatividade, inovação e ética profissional com a máxima segurança informacional e jurídica.   </p>
                                    
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                       
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row acreditar">
                    <div class="col-md-6 bg-white">
                        <h3 class="title text-primary">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                            Acreditamos</h3>
                        <img src="img/design-sem-nome-2019-12-02t162210671-545x285.png" alt="" class="rounded-circle img-fluid" >
                        <p class="text text-justify">
                           Os que esperam no senhor não se cansam nem se fatigam mas voam como "ÁGUIAS" »Isaías 40:31«
                        </p>
                        <p class="text">
                            O valor de um homem deve medir-se oelo que dá e não pelo que recebe. Não se converta em 
                            um homem de sucesso senão num homem de valores, porque a personalidade criada deve pensar e julgar por si mesma,
                            porque o profresso moral da sociedade depende exclusivamente da sua independência. »<strong>Albert Einstein«</strong>
                        </p>

                    </div>

                    <div class="col-md-6 bg-white">
                        <h3 class="title text-info"><div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div> grupo Kawanda</h3>
                        <p class="text">
                            Formação e treinamentos de excelência é uma tarefa que o grupo resolve.
                       
                            O objectivo das aulas de nataçãa, é que todos compartilhem o mesmo espaço. A educação de um aluno é o dever e obrigação 
                            dos encarregados e do estado, porque é um direito do aluno.
                        </p>
                        <p class="text">
                            O ensinamento é um dever e obrigação das isntituições acadêmicas onde o <strong class="complexo">Complexo</strong>
                            <strong class="escolar">Escolar</strong> <strong class="kawanda">Kawanda</strong> é uma referência de ensino e aprendizado.
                           Aprender é uma decisão do aluno então você quer aprender?
                        </p>
                        <img src="img/rla-0934-easy-resizecom-545x363.jpg" alt="" class="rounded-circle img-fluid">
                        <p></p>
                    </div>
                </div>
            </div>
         </div>
        
         <div class="acreditar">
            <h3 class="title text-info">Grupo Kawanda</h3>
                      
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                 
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/corpo-docente.jpg" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-danger">corpo docente da instituição</h5>
                      <p class="text-dark">Se docente é quem ministra aulas, logo, corpo docente é o conjunto de professores de instituições de ensino, como universidades, cursinhos, cursos profissionalizantes, ensino médio etc. Em geral, docente é uma palavra usada para se relacionar a professores com pós-graduação, mestres e doutores.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/curso-tecnico-analises-clinicas.jpg" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-warning">curso de análises clínicas</h5>
                      <p>As análises clínicas são um conjunto de exames com a finalidade de verificar o estado de saúde de um paciente ou investigar doenças, como os chamados exames de rotina, check-ups, dentre outros.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/farmacia2.jpg" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-warning">curso de farmácia</h5>
                      <p>
                        A Farmacologia é a ciência que investiga os medicamentos e sua interação com os organismos vivos. Dentro do curso de Medicina, possui um lugar de destaque, uma vez que é responsável pelo estudo dos mecanismos de ação dos fármacos e sua aplicação na prática clínica.</p>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <img src="img/labinfo_07_s.jpg" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Laboratório de Informática</h5>
                      <p class="text-white">Os Laboratórios de Informática têm a missão de apoiar aos alunos oferecendo um ambiente favorável para realizações de trabalhos e pesquisas. Todos os computadores possuem acesso à internet, com uma boa velocidade, e bons equipamentos para propiciar conforto e agilidade.
                    </p>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <img src="img/Laboratório-de-Semiologia-e-Semiótica-6.jpg" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-warning">Laboratório  de Enfermagem</h5>
                      <p class="text-info">
                        O Laboratório de Enfermagem tem por finalidade possibilitar aos alunos a prática do conhecimento teórico adquirido em sala de aula, através da simulação de procedimentos de enfermagem.</p>
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
             
         </di>
         <section id="home1">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-info"><div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span></h1>
                        <p class="text-white justify"><strong>Qualidade é o grau de utilidade esperado ou adquirido de qualquer coisa, verificável através da forma e dos elementos constitutivos do mesmo e pelo resultado do seu uso. A palavra "qualidade" tem um conceito subjetivo que está relacionada com as percepções, necessidades e resultados em cada indivíduo. A alta qualidade de ensino gera impactos na motivação e no engajamento dos alunos. Em uma escola que oferece um ensino de qualidade, as crianças recebem estímulos que contribuem para aumentar o interesse e o envolvimento delas no processo de aprendizagem.</strong></p>
                        <p class="text-white justify-text">
                            <strong>Nesse sentido, uma escola de qualidade que se preocupa com inovação é aquela que não se acomoda, buscando continuamente por ferramentas e modos de aprendizado que contribuirão para o desenvolvimento socioemocional e técnico dos alunos. </strong>
                        </p>
                              
                </div>
                
                </div>
            </div>
        </section>
    

<footer class="footer bg-sucess p-3">
       
    <span class="copy-right text-white mt-3">	<strong>&copy; 2022 - Complexo Escolar Kawanda</strong> <span>Todos os direitos reservados </span>
    <p class="text-white"><strong>Created by softDev-iSpinner</strong></p>
  </footer>
  
  
  <script src="js/bootstrap.min.js"></script>
</body>
</html>