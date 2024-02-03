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
				$sqlConsulta = "SELECT * FROM especializada WHERE id = '$id'";
			$res = mysqli_query($conexao, $sqlConsulta);

			$especializa = mysqli_fetch_assoc($res);

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

                <div class="row">
            
                        <main>
                            <div class="py-5 text-center">
                            <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                            <h2>FICHA DE ESCUTA ESPECIALIZADA</h2>
                            <p class="lead">...</p>
                            </div>
                            
                            <div class="col-md-7 col-lg-8">
                                <h4 class="mb-3">DADOS GERAIS DA NOTIFICAÇÃO </h4>
                                <form class="needs-validation" action="C_espe.php" novalidate method="post" enctype='multipart/form-data'>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                    <label for="data" class="h5">Data da Notificação/informação:</label>
                                    <br>
                                    <label id="data" name="data" required="required" value=""><?php echo "$especializa[data]"?></label>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="municipio" class="h5">Município da Notificação/informação:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="municipio" name="municipio"  required="required" value=""><?php echo "$especializa[municipio]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="orgao" class="h5">1° Órgão ou entidade notificadora:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="orgao" name="orgao" required="required" value=""><?php echo "$especializa[orgao]"?></label>
                                        <div class="invalid-feedback">
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="profissional" class="h5">Profissional responsável pelo registro de notificação:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="profissional" name="profissional" required="required" value=""><?php echo "$especializa[profissional]"?></label>
                                        <div class="invalid-feedback">
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="ende_orgao" class="h5">Endereço do órgão ou entidade notificadora:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="ende_orgao" name="ende_orgao" required="required" value=""><?php echo "$especializa[ende_orgao]"?></label>
                                        <div class="invalid-feedback">
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="telefone" class="h5">Telefones:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="telefone" name="telefone" onkeyup="formatarTelefone(this)" maxlength="11" required="required" value=""><?php echo "$especializa[telefone]"?></label>
                                        <div class="invalid-feedback">
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                        <div class="col-sm-6">
                                                <label for="data_evento" class="h5">Data do evento:</label> <br>
                                                <label type="date" id="data_evento" name="data_evento"  required="required" value=""><?php echo "$especializa[data_evento]"?></label>
                                            <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">DADOS DA CRIANÇA OU ADOLESCENTE </h5>

                                    <div class="col-12">
                                    <label for="nome_crianca" class="h5">Nome:</label>
                                    <div class="input-group has-validation">
                                        <label type="text"  id="nome_crianca" name="nome_crianca" required="required" value=""><?php echo "$especializa[nome_crianca]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="deficiencia" class="h5">É pessoa com deficiência?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="deficiencia" name="deficiencia" required="required" value=""><?php echo "$especializa[deficiencia]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="tecnologia_assistiva" class="h5">A criança/adolescente necessita de tecnologia assistiva ou auxilio técnico?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="tecnologia_assistiva" name="tecnologia_assistiva" required="required" value=""><?php echo "$especializa[tecnologia_assistiva]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-sm-6">
                                    <label for="data_nascimento" class="h5">Data de nascimento:</label> <br>
                                    <label type="date" id="data_nascimento" name="data_nascimento" required="required" value=""><?php echo "$especializa[data_nascimento]"?></label>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="idade" class="h5">Idade:</label>
                                    <div class="input-group has-validation">
                                        <label type="number" id="idade" name="idade"  required="required" value=""><?php echo "$especializa[idade]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="nome" class="h5">Sexo/gênero:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="sexo" name="sexo" required="required" value=""><?php echo "$especializa[sexo]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="naturalidade" class="h5">Naturalidade:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="naturalidade" name="naturalidade" required="required" value=""><?php echo "$especializa[naturalidade]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="nacionalidade" class="h5">Nacionalidade:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="nacionalidade" name="nacionalidade" required="required" value=""><?php echo "$especializa[nacionalidade]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="filiacao" class="h5">Filiação:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="filiacao" name="filiacao" required="required" value=""><?php echo "$especializa[filiacao]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="nome_responsavel" class="h5">Nome do responsável pelo acompanhamento da criança no momento da notificação:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="nome_responsavel" name="nome_responsavel" required="required" value=""><?php echo "$especializa[nome_responsavel]"?></label>
                                    </div>
                                    </div>  

                                    <br>


                                    <div class="col-12">
                                    <label for="situacao_moradia" class="h5">Endereço residencial e/ou Situação de Moradia:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="situacao_moradia" name="situacao_moradia" required="required" value=""><?php echo "$especializa[situacao_moradia]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="tel_responsavel" class="h5">Telefone do Responsável:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="tel_responsavel" name="tel_responsavel" onkeyup="formatarTelefone(this)" maxlength="11" required="required" value=""><?php echo "$especializa[tel_responsavel]"?></label>
                                        <div class="invalid-feedback">
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="email_responsavel" class="h5">E-mail do Responsável:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="email_responsavel" name="email_responsavel" required="required" value=""><?php echo "$especializa[email_responsavel]"?></label>
                                    </div>
                                    </div>  

                                    <br>

                                    <div class="col-12">
                                    <label for="escolaridade_respon" class="h5">Escolaridade do Responsável:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="escolaridade_respon" name="escolaridade_respon" required="required" value=""><?php echo "$especializa[escolaridade_respon]"?></label>
                                    </div>
                                    </div>  

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">COMPOSIÇÃO DO NÚCLEO FAMILIAR</h5>

                                    <div class="col-12">
                                    <label for="irmao" class="h5">Possui irmãos?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="irmao" name="irmao" required="required" value=""><?php echo "$especializa[irmao]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="quanti_irmao" class="h5">Quantos Irmãos?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="quanti_irmao" name="quanti_irmao" required="required" value=""><?php echo "$especializa[quanti_irmao]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="quant_pessoas" class="h5">Quantidade de pessoas que convivem na mesma residência:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="quant_pessoas" name="quant_pessoas" required="required" value=""><?php echo "$especializa[quant_pessoas]"?></label>
                                    </div>
                                    </div>


                                    <br>

                                    <div class="col-12">
                                    <label for="tipo_violacao" class="h5">Quais tipos de Violação de Direitos sob Suspeita ou Comprovada:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="tipo_violacao" name="tipo_violacao" required="required" value=""><?php echo "$especializa[tipo_violacao]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">SUPOSTO AUTOR</h5>

                                    <div class="col-12">
                                    <label for="nome_autor" class="h5">Nome:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="nome_autor" name="nome_autor" required="required" value=""><?php echo "$especializa[nome_autor]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="endereco_autor" class="h5">Endereço ou local onde o suposto autor possa ser encontrado:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="endereco_autor" name="endereco_autor" required="required" value=""><?php echo "$especializa[endereco_autor]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">RELAÇÃO DA VÍTIMA COM O SUPOSTO AUTOR</h5>

                                    <div class="col-12">
                                    <label for="relacao_autor" class="h5">A vítima e o suposto autor possui relação de parentesco?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="relacao_autor" name="relacao_autor" required="required" value=""><?php echo "$especializa[relacao_autor]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="processo_jud" class="h5">O suposto autor responde a algum processo judicial?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="processo_jud" name="processo_jud" required="required" value=""><?php echo "$especializa[processo_jud]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    
                                    <div class="col-12">
                                    <label for="med_prote_ante" class="h5">Há medida protetiva  decretada anteriormente em relação ao suposto autor?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="med_prote_ante" name="med_prote_ante" required="required" value=""><?php echo "$especializa[med_prote_ante]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="historico_autor" class="h5">Ocorreram fatos semelhantes envolvendo o suposto autor anteriormente?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="historico_autor" name="historico_autor" required="required" value=""><?php echo "$especializa[historico_autor]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">INFORMAÇÕES PRESTADAS PELOS RESPONSÁVEIS SOBRE OS FATOS NARRADOS</h5>

                                    <div class="col-12">
                                    <label for="historico_vitima" class="h5">Ocorreram fatos violentos anteriormente, relatados ou não, contra a vítima, familiares, etc.?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="historico_vitima" name="historico_vitima" required="required" value=""><?php echo "$especializa[historico_vitima]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="historico_familia" class="h5">Há histórico de abuso sexual ou outras violências na família?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="historico_familia" name="historico_familia" required="required" value=""><?php echo "$especializa[historico_familia]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="risco_local" class="h5">Existe alguma situação de risco para a criança e adolescente no núcleo do domicilio ou na comunidade?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="risco_local" name="risco_local" required="required" value=""><?php echo "$especializa[risco_local]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    
                                    <div class="col-12">
                                    <label for="testemunha" class="h5">Há testemunha dos fatos narrados? (em casso de afirmativo, indicar nomes e contatos)</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="testemunha" name="testemunha" required="required" value=""><?php echo "$especializa[testemunha]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="testemunhas" class="h5">Há testemunha dos fatos narrados? (em casso de afirmativo, indicar nomes e contatos) <br>Nome da testemunha:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="testemunhas" name="testemunhas" required="required" value=""><?php echo "$especializa[testemunhas]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="contato_testemunha" class="h5">Endereço e/ou Telefone:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="contato_testemunha" name="contato_testemunha" required="required" value=""><?php echo "$especializa[contato_testemunha]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">SAÚDE</h5>

                                    <div class="col-12">
                                    <label for="acompanhamento" class="h5">Local de acompanhamento de saúde da criança e proficional de referência:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="acompanhamento" name="acompanhamento" required="required" value=""><?php echo "$especializa[acompanhamento]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="atendimento_vit" class="h5">Após a notícia da violencia a criança/adolescente rescebeu atendimento pelo equipamento de saúde?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="atendimento_vit" name="atendimento_vit" required="required" value=""><?php echo "$especializa[atendimento_vit]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="doenca" class="h5">A criança apresenta alguma doença?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="doenca" name="doenca" required="required" value=""><?php echo "$especializa[doenca]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="tratamento_diario" class="h5">A criança faz uso de medicação, ou realiza algum procedimento contínuo de tratamento?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="tratamento_diario" name="tratamento_diario" required="required" value=""><?php echo "$especializa[tratamento_diario]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="acomp_psicologico" class="h5">A criança já realiza/realizou acompanhamento psicológico? (Período e Psicólogo de Referência)</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="acomp_psicologico" name="acomp_psicologico" required="required" value=""><?php echo "$especializa[acomp_psicologico]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="procedimento" class="h5">Quais procedimentos realizados?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="procedimento" name="procedimento" required="required" value=""><?php echo "$especializa[procedimento]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">EDUCAÇÃO</h5>

                                    <div class="col-12">
                                    <label for="local_estuda" class="h5">Local onde estuda? (nome e endereço):</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="local_estuda" name="local_estuda" required="required" value=""><?php echo "$especializa[local_estuda]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">ASSISTENCIA SOCIAL</h5>

                                    <div class="col-12">
                                    <label for="documentacao" class="h5">Possui documentação básica?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="documentacao" name="documentacao" required="required" value=""><?php echo "$especializa[documentacao]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="cad_unico" class="h5">A família ou o adolescente está incluso no Cadastro Único da Assistência Social (Cad.Único)?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="cad_unico" name="cad_unico" required="required" value=""><?php echo "$especializa[cad_unico]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="rede_atendimento" class="h5">Em caso de positivo, a família e ou o adolescente está referenciado em qual equipamento?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="rede_atendimento" name="rede_atendimento" required="required" value=""><?php echo "$especializa[rede_atendimento]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="bpc_" class="h5">É beneficiário dos Programas, projetos, serviços e da transferência de renda (Programa Bolsa Família - PBF), Cartão Família Carioca e Benefício de Prestação Continuada - BPC? Se sim: <br> Em quais serviços o atendimento é realizado?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="bpc_" name="bpc_" required="required" value=""><?php echo "$especializa[bpc_]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="bpc" class="h5">Quais benefícios sociossistenciais recebe?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="bpc" name="bpc" required="required" value=""><?php echo "$especializa[bpc]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="violacao_direitos" class="h5">Há suspeita de violações de direitos referentes à criança/ adolescente e a família?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="violacao_direitos" name="violacao_direitos" required="required" value=""><?php echo "$especializa[violacao_direitos]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="fragilidade_familiar" class="h5">Descreva se no atendimento foram observadas fragilidades na relação familiar. <br>Foram identificadas situações de vulnerabilidade social e/ou fragilidade de vínculos familiares e comunitários?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="fragilidade_familiar" name="fragilidade_familiar" required="required" value=""><?php echo "$especializa[fragilidade_familiar]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="conselho_tutelar" class="h5">Foi realizado encaminhamento ao CONSELHO TUTELAR?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="conselho_tutelar" name="conselho_tutelar" required="required" value=""><?php echo "$especializa[conselho_tutelar]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <hr class="my-4">
                                    <h5 class="mb-3">MEDIDAS PROTETIVAS</h5>

                                    <div class="col-12">
                                    <label for="med_protetiva" class="h5">Quais são as medidas protetivas necessárias?</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="med_protetiva" name="med_protetiva" required="required" value=""><?php echo "$especializa[med_protetiva]"?></label>
                                    </div>
                                    </div>

                                    <br>

                                    <div class="col-12">
                                    <label for="relato_crianca" class="h5">Relato da Criança/Adolescente:</label>
                                    <div class="input-group has-validation">
                                        <label type="text" id="relato_crianca" name="relato_crianca" required="required" value=""><?php echo "$especializa[relato_crianca]"?></label>
                                    </div>
                                    </div>

                                    <br>
                                
                                </div>

                                <hr class="my-4">
                                </form>
                            </div>
                            </div>
                        </main>
                </div>
                <footer class="my-5 pt-5 text-muted text-center text-small">
                    
                </footer>
                </div>


            <!-- Footer Start -->
            
            <!-- Footer End -->
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

    <script>

        function formatarTelefone(input) {
        var telefone = input.value.replace(/\D/g, '');
        telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');
        input.value = telefone;
        }  
    </script>
</body>

</html>