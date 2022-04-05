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
<link href="css/bootstrap.min.css" rel="stylesheet" >
<!--Bootstrap icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 <!--css do progeto-->
 <link rel="stylesheet" href="css/style.css">
<!--JavaScript Bootstrap-->

 </head>

<body id="incricao-body">
   
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
                    <a href="cursos.php" class="nav-link" aria-current="page">Cursos</a>
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
                  <li class="nav-item dropdown active">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <h5 class="text-white mt-5"> PAINEL DE INSCRIÇÃO PARA OS CURSOS DA ARE DE GESTÃO </h5>
        
              </div>
            </div>
             </div>
        </div>
        <div class="alert alert-info alert-dismissible fade show mt-0" role="alert">
          <i class="bi bi-info-circle-fill text-primary"> </i><strong>INFORMAÇÃO:</strong> <b class="text-danger">Bem vindo ao painel de inscrção...</b>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </section>

    <section class="container" id="isncrica-saude">
       
                <img src="img/logo-1.png" class="img-fluid" alt="">
                <h3 class="text-dark">Instituto Médio de Saúde Privado</h3>
                <h5 class="text-success">Agora está mais fácil e rápido, faça a sua Inscrição online e evita ficar na fila.</h5>
                <hr>

                <div class="row">
                    <div class="col-md-9">
                        <h6 class="text-dark dados-inscricao">Dados da inscrição</h6>

                        <form class="row gx-3 gy-2 align-items-left mt-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label col-md-5">Nome Completo:</label>
                                <input type="text" class="form-control" id="validationCustom01" required placeholder="Digete o seu nome">
                                <div class="invalid-feedback">
                                    Nome do aluno invalido.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Dascimento:</label>
                                <input type="date" class="form-control" id="validationCustom02" placeholder="Digite o seu Nº de Bilhete" required>
                                
                                <div class="invalid-feedback">
                                Data de nascimento invalida.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustomUsername" class="form-label">Idade:</label>
                                <div class="input-group has-validation">
                                 <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Digete a data de nascimento">
                                <div class="invalid-feedback">
                                   Idade invalida
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Nº do Bilhete:</label>
                                <input type="text" class="form-control" id="validationCustom03" maxlength="14" minlength="14"  required placeholder="Digete o número de bilhete">
                                <div class="invalid-feedback">
                                Nímero de Bilhete invalido.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Genero:</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                </select>
                                <div class="invalid-feedback">
                                Selecione o genero.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="validationCustom05" maxlength="12" minlength="9" required placeholder="Digite o número de telefone">
                                <div class="invalid-feedback">
                                  Número de telefone invalido
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom06" class="form-label">Curso:</label>
                                <select class="form-select" id="validationCustom06" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="Recursos Humanos">Recursos Humanos</option>
                                <option value="Gestão Empresaria">Gestão Empresaria</option>
                                </select>  <div class="invalid-feedback">
                                  Selecione um curso
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom07" class="form-label">Periódo:</label>
                                <select class="form-select" id="validationCustom07" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="Manhã">Manhã</option> 
                                <option value="Tarde">Tarde</option> 
                                </select>
                                <div class="invalid-feedback">
                                  Selecione o período
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom08" class="form-label">Arquivo:</label>
                                <input type="file" class="form-control" id="validationCustom08" required placeholder="Digite o número de telefone">
                                <div class="invalid-feedback">
                                  Arquivo invalido
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom09" class="form-label col-md-6">Sofre de alguma patologia?</label>
                                <select class="form-select" id="validationCustom09" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="Sim">Sim</option> 
                                <option value="Não">Não</option> 
                                </select>
                                <div class="invalid-feedback">
                                 Selecione uma das opções
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label col-md-12" for="invalidCheck">
                                   <strong class="text-dark"> Concoordar com os</strong> <strong class="text-primary">Termos e Políticas de cadastro</strong>
                                </label>
                                <div class="invalid-feedback">
                                    Tens de concoordar com os nossos termos de privacidades!!
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="btn">
                                <button class="btn btn-primary mb-5 col-md-8" type="submit">Cadastra-se</button>
                            </div>
                   </form>
    
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-dark blod">Total de Cursos 3</h6> 
                        <div class="card bg-white">
                            <div class="cad-title">
                           <p class="cursos-inscricao">
                           <strong>Cursos</strong><br>
                            1º Recursos Humanos <br>
                            2º Gestão Empresaria <br>
                           
                           </p>
                            
                               <p class="documentos">
                               <strong> Documentos Necessários </strong><br>
                                1ª Cópia de B.I(1) <br>
                                2ª Fotos tipo passe(4) <br>
                                3º Cópia do Certificado da 9ª classe(2) <br>
                                4º Cópia do Cartão de vacina(1)
                               </p>
                            </div>
                            
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-info-circle-fill text-primary"> </i><strong class=" text-primary">Nota:</strong> <b class="text-danger"> A primeira mensalidade deve ser paga no ato da matricula</b>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
                    </div>
                </div>
            
        </div>

    </section>

      
        
         
    


         <footer class="footer bg-sucess p-3 ">
       
          <span class="copy-right text-white mt-3">	<strong>&copy; 2022 - Complexo Escolar Kawanda</strong> <span>Todos os direitos reservados </span>
          <p class="text-white"><strong>Created by softDev-iSpinner</strong></p>
        </footer>
  

        
  <script src="js/bootstrap.min.js"></script>
        
  <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>      
</body>
</html>