
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <style>
    .box-search{
        display: flex;
        justify-content: flex-start;
        gap: .1%;
    }
    </style>
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
    
</head>

<body>
<?php
			 require '..\conexao.php';
			if(isset($_GET)){
				$id = $_GET["id"];
				$sqlConsulta = "SELECT * FROM revelacao_espontanea WHERE id = '$id'";
			$res = mysqli_query($conexao, $sqlConsulta);

			$espo_ = mysqli_fetch_assoc($res);

			/*if("$usuario[permissao]" == "1" )
			{
				$permissao = "Administrador";
			}
			else
			{
				$permissao = "Normal";
			}*/

			}
		?>
    <div class="container-xxl position-relative bg-white d-flex p-1">
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


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-2 px-2">

            <!-- COMEÇA AQUI -->
            <div id="main" class="container-fluid" style="margin-top: 30px"> 
 
                    <div id="top" class="row">
                        <div class="titulo">
                            <h2><?php echo "$espo_[nome]"?></h2>
                        </div>
                         <!-- <div class="box-search">
                            <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
                            <button onclick="searchData()" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                            </button>
                        </div>  -->
                    
                        <div class="col-sm-3"> <br>
                            <a href="encaminha_espo.php" class="btn btn-primary pull-right h2">Adicionar Encaminhamento</a>
                            
                        </div>
                    </div> 
                     
                       
                    </div> <!-- /#top -->
                            
                    <hr />
                    <div id="list" class="row">

                    <div class="table-responsive">
                        <table class="table table-striped" col-sm-3 cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Recebido</th>
                                    <th>Encaminhado</th>
                                    <th>Situação</th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                                require '..\conexao.php';
                                                    
                                                    $sql = "SELECT * from encaminhamento_espo";				
                                                                                                                                                    
                                                    $resultado = mysqli_query($conexao, $sql);
                                                    
                                                    
                                                    while ($espo_encam = mysqli_fetch_array($resultado)){
                                                        $aux1 = strtotime($espo_encam["data_encaminha"]);
                                                        $data = date('d/m/Y', $aux1);

                                                        echo "<tr align='left'>
                                                        
                                                            <td>$data</td>
                                                            <td> $espo_encam[local_recebido]</td>
                                                            <td> $espo_encam[local_encaminha]</td>
                                                            <td> $espo_encam[situacao]</td>
                                                            <td class='actions'>
                                                            <a class='btn btn-primary btn-xs' href='ver_encam_espo.php?id=$espo_encam[id]'>Visualizar</a>
                                                            <a class='btn btn-warning btn-xs' href='.php?id=$espo_encam[id]'>Editar</a>
                                                            <a class='btn btn-danger btn-xs' href='.php?id=$espo_encam[id]'>Excluir</a>
                                                            </td>
                                                            </tr>	
                                                            
                                                        ";
                                                    }
                                                    
                                                ?>

                            </tbody>
                        </table>
                    </div>

                    </div> <!-- /#list -->
                    </div> <!-- /#main -->
                    <!-- TERMINA AQUI -->
            </div>
            <!-- Sale & Revenue End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
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
    
</body>
     <script>
    var search = document.getElementById("pesquisar");

    search.addEventListener("keydown", function(event){
        if (event.key == "Enter")
        {
            searchData()
        }

    });
    function searchData()
    {
        window.location ="Exibir_espo_encam.php?search="+search.value;
    }
</script> 

</html>