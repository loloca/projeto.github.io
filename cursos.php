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
    <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-white">
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
                    <a href="index.php" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="cursos.php" class="nav-link active" aria-current="page">Cursos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <section id="cursos">
        <div class="bg-info">
          <div class="row">
            <div class="col-md-12">
              <div class="col-12 col-md-12">
                <h5 class="text-white mt-5"> VAGAS LIMITADAS , ESCOLHA O SEU CURSO! </h5>
        
              </div>
            </div>
             </div>
        </div>
        <div class="alert alert-info alert-dismissible fade show mt-0" role="alert">
          <i class="bi bi-info-circle-fill text-primary"> </i><strong>INFORMAÇÃO:</strong> <b class="text-danger">Cursos em Destaques, para mais cursos acessa o menu inscrições...</b>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </section>

        <div class="curso" id="curso-banners">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/Tipos-de-laboratórios.jpg" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark">Analíses Clínicas</h3>
                                   <span class="left">Vagas limitadas</span><br>
                                <a href="Inscricaosuade.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/enfermagem1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark uparcase">
                                    Enfermagem
                              </h3> 
                               <span class="left">Vagas limitadas</span><br>
                           
                                      <a href="Inscricaosuade.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                   
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center"> </i>
                        <img src="img/farmacia1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark">
                                farmácia
                          </h3>  <span class="left">Vagas limitadas</span><br>
                           
                                 
                                <a href="Inscricaosuade.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/sistema-integrado.png" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark">GESTÃO EMPRESARIAL</h3>
                                   <span class="left">Vagas limitadas</span><br>
                                <a href="InscricaoGestao.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/grh.jpg" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark">RECURSOS HUMANOS</h3>
                                   <span class="left">Vagas limitadas</span><br>
                                <a href="InscricaoGestao.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="img/cej.jpg" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <h3 class="card-title text-dark">Pré-universitário</h3>
                                   <span class="left">Vagas limitadas</span><br>
                                <a href="InscricaoPuniv.php" class="btn btn-dark">Inscreva-se já</a>
                            </div>
                      
                    </div>
                </div>
            </div>
            
         </div>
        
         
    


         <footer class="footer bg-sucess p-3">
       
          <span class="copy-right text-white mt-3">	<strong>&copy; 2022 - Complexo Escolar Kawanda</strong> <span>Todos os direitos reservados </span>
          <p class="text-white"><strong>Created by softDev-iSpinner</strong></p>
        </footer>
  
  
    <script src="js/bootstrap.min.js"></script>
</body>
</html>