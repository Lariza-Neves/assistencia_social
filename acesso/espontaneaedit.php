<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body>
<?php
			 require '..\conexao.php';
			if(isset($_GET)){
				$id = $_GET["id"];
				$sqlConsulta = "SELECT * FROM revelacao_espontanea WHERE id = '$id'";
			$res = mysqli_query($conexao, $sqlConsulta);

			$revelacao = mysqli_fetch_assoc($res);

			}
		?>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-2 pb-6">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa me-2 "></i>PROTEÇÃO</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Inicio</a>
                    
                    <a href="espontanea.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Espontânea</a>
                    <a href="especializada.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Especializada</a>
                    <a href="Exibir_espontanea.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Exibir Espontânea</a>
                    <a href="Exibir_especializada.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Exibir Especializada</a>
                    <a href="encaminhamento.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Encaminhamento</a>
                    <a href="usuario.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Usuários</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="  " alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Usuario</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <div class="container">
                <main>
                    <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h2>FICHA DE NOTIFICAÇÃO DE REVELAÇÃO ESPONTÂNEA</h2>
                    <p class="lead">...</p>
                    </div>
                    
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">REVELAÇÃO ESPONTÂNEA</h4>
                        <form class="needs-validation" action="altera_espo.php" novalidate method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="id" value="<?php echo "$revelacao[id]"?>"/>
                        <div class="row g-3">
                            <div class="col-sm-6">
                            <label for="data_revelacao" class="form-label">Data da Revelação</label>
                            <input type="date" class="form-control" id="data_revelacao" name="data_revelacao" required value="<?php echo "$revelacao[data_revelacao]"?>">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                            </div>

                            

                            <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="nome" name="nome" required value="<?php echo "$revelacao[nome]"?>">
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                            </div>


                            <div class="col-12">
                            <p class="mb-3">Sexo</p>
                            <div class="form-check">
                                <input id="sexo" name="sexo" type="radio" class="form-check-input" name="sexo"  required value="Masculino" <?php if ("$revelacao[sexo]" == "Masculino") {print "checked";}?>>
                                <label class="form-check-label" for="sexo">Masculino</label>
                            </div>
                            
                            <div class="form-check">
                                <input id="sexo" name="sexo" type="radio" class="form-check-input" name="sexo" required value="Feminino" <?php if ("$revelacao[sexo]" == "Feminino") {print "checked";}?>>
                                <label class="form-check-label" for="sexo">Feminino</label>
                            </div>
                            </div>

                            
                            <div class="col-12">
                                <div class="col-sm-6">
                                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"  required  value="<?php echo "$revelacao[data_nascimento]"?>">
                                </div>
                            </div>

                            <div class="col-12">
                            <label for="idade" class="form-label">Idade</label>
                            <div class="input-group has-validation">
                                <input type="number" class="form-control" id="idade" name="idade"  required value="<?php echo "$revelacao[idade]"?>">
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="com_deficiencia" class="form-label">Com Deficiencia</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="com_deficiencia" name="com_deficiencia" required value="<?php echo "$revelacao[com_deficiencia]"?>">
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="filiacao" class="form-label">Filiação</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="filiacao" name="filiacao" required value="<?php echo "$revelacao[filiacao]"?>">
                            </div>
                            </div>



                            <div class="col-12">
                            <label for="responsavel_legal" class="form-label">Responsável legal</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="responsavel_legal" name="responsavel_legal" required value="<?php echo "$revelacao[responsavel_legal]"?>">
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="endereco" class="form-label">Endereço</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="endereco" name="endereco"  required value="<?php echo "$revelacao[endereco]"?>">
                            </div>
                            </div>  

                        

                            <div class="col-md-5">
                            <label for="cidade" class="form-label">Cidade</label>
                            <select class="form-select" id="cidade" name="cidade" required>
                                <option value="<?php echo "$revelacao[cidade]"?>"><?php echo "$revelacao[cidade]"?></option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="telefone" class="form-label">Telefone</label>
                            <div class="input-group has-validation">
                                <input type="text" name="telefone" id="telefone" class="form-control" onkeyup="formatarTelefone(this)" maxlength="11" required value="<?php echo "$revelacao[telefone]"?>">
                            </div>
                            </div>

                            
                            <div class="col-12">
                            <label for="r_atend" class="form-label">Rede de Atendimento</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="r_atend" name="rede_atendimento" required value="<?php echo "$revelacao[rede_atendimento]"?>">
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="violacao" class="form-label">Violação</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="violacao" name="violacao" required value="<?php echo "$revelacao[violacao]"?>">
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>


                            </div>
                            <div class="col-12">
                            <label for="descricao" class="form-label">Descrição</label>
                            <div class="input-group has-validation">
                                <textarea type="text" class="form-control" id="descricao" name="descricao" required><?php echo "$revelacao[descricao]"?></textarea>
                            </div>
                            </div>
                           
                        <div class="row gy-3">

                            

                            

                            
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
                        </form>
                    </div>
                    </div>
                </main>

                <footer class="my-5 pt-5 text-muted text-center text-small">
                    <p class="mb-1">&copy; 2017–2021 Company Name</p>
                    <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                    </ul>
                </footer>
                </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
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

    <script>

        function formatarTelefone(input) {
        var telefone = input.value.replace(/\D/g, '');
        telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');
        input.value = telefone;
        }  
    </script>
</body>

</html>