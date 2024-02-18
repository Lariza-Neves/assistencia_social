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
                    <h2>FICHA DE ESCUTA ESPECIALIZADA</h2>
                    <p class="lead">...</p>
                    </div>
                    
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">DADOS GERAIS DA NOTIFICAÇÃO </h4>
                        <form class="needs-validation" action="C_espe.php" novalidate method="post" enctype='multipart/form-data'>
                        <div class="row g-3">
                            <div class="col-sm-6">
                            <label for="data" class="form-label">Data da Notificação/informação:</label>
                            <input type="date" class="form-control" id="data" name="data" required value="<?php echo "$especializa[data]"?>">
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="municipio" class="form-label">Município da Notificação/informação:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="municipio" name="municipio"  required value="<?php echo "$especializa[municipio]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="orgao" class="form-label">1° Órgão ou entidade notificadora:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="orgao" name="orgao"  required value="<?php echo "$especializa[orgao]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="profissional" class="form-label">Profissional responsável pelo registro de notificação:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="profissional" name="profissional" required value="<?php echo "$especializa[profissional]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="ende_orgao" class="form-label">Endereço do órgão ou entidade notificadora:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="ende_orgao" name="ende_orgao" required value="<?php echo "$especializa[ende_orgao]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="telefone" class="form-label">Telefones:</label>
                            <div class="input-group has-validation">
                                <input type="text" id="telefone" name="telefone" class="form-control" onkeyup="formatarTelefone(this)" maxlength="11" required value="<?php echo "$especializa[telefone]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                                <div class="col-sm-6">
                                        <label for="data_evento" class="form-label">Data do evento:</label>
                                        <input type="date" class="form-control" id="data_evento" name="data_evento"  required value="<?php echo "$especializa[data_evento]"?>">
                                    <div class="invalid-feedback">
                                </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">DADOS DA CRIANÇA OU ADOLESCENTE </h5>

                            <div class="col-12">
                            <label for="nome_crianca" class="form-label">Nome:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="nome_crianca" name="nome_crianca" required value="<?php echo "$especializa[nome_crianca]"?>">
                            </div>
                            </div>

                            <br>


                            <div class="col-12">
                            <p class="mb-3">É pessoa com deficiência?</p>
                            <div class="form-check">
                                <input id="deficiencia" name="deficiencia" type="radio" required value="Sim" <?php if ("$especializa[deficiencia]" == "Sim") {print "checked";}?>>
                                <label class="form-check-label" for="deficiencia">Sim</label>
                            </div>
                            <div class="form-check">
                                <input id="deficiencia" name="deficiencia" type="radio" required value="Não" <?php if ("$especializa[deficiencia]" == "Não") {print "checked";}?>>
                                <label class="form-check-label" for="deficiencia">Não</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="tecnologia_assistiva" class="form-label">A criança/adolescente necessita de tecnologia assistiva ou auxilio técnico?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="tecnologia_assistiva" name="tecnologia_assistiva" required value="<?php echo "$especializa[tecnologia_assistiva]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-sm-6">
                            <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required value="<?php echo "$especializa[data_nascimento]"?>">
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="idade" class="form-label">Idade:</label>
                            <div class="input-group has-validation">
                                <input type="number" class="form-control" id="idade" name="idade"  required value="<?php echo "$especializa[idade]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <p class="mb-3">Sexo/gênero:</p>
                            <div class="form-check">
                                <input id="sexo" name="sexo" type="radio" class="form-check-input" required value="Masculino" <?php if ("$especializa[sexo]" == "Masculino") {print "checked";}?>>
                                <label class="form-check-label" for="sexo">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input id="sexo" name="sexo" type="radio" class="form-check-input" required value="Feminino" <?php if ("$especializa[sexo]" == "Feminino") {print "checked";}?>>
                                <label class="form-check-label" for="sexo">Feminino</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="naturalidade" class="form-label">Naturalidade:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="naturalidade" name="naturalidade" required value="<?php echo "$especializa[naturalidade]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="nacionalidade" class="form-label">Nacionalidade:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" required value="<?php echo "$especializa[nacionalidade]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="filiacao" class="form-label">Filiação:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="filiacao" name="filiacao" required value="<?php echo "$especializa[filiacao]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="nome_responsavel" class="form-label">Nome do responsável pelo acompanhamento da criança no momento da notificação:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" required value="<?php echo "$especializa[nome_responsavel]"?>">
                            </div>
                            </div>  

                            <br>

                            <div class="col-12">
                            <p class="mb-3">Endereço residencial e/ou Situação de Moradia:</p>
                            <div class="form-check">
                                <input id="situacao_moradia" name="situacao_moradia" type="radio" class="form-check-input" required value="Acolhimento" <?php if ("$especializa[situacao_moradia]" == "Acolhimento") {print "checked";}?>>
                                <label class="form-check-label" for="situacao_moradia">Acolhimento</label>
                            </div>
                            <div class="form-check">
                                <input id="situacao_moradia" name="situacao_moradia" type="radio" class="form-check-input" required value="Cumprimento de medida Sócio-educativa" <?php if ("$especializa[situacao_moradia]" == "Cumprimento de medida Sócio-educativa") {print "checked";}?>>
                                <label class="form-check-label" for="situacao_moradia">Cumprimento de medida Sócio-educativa</label>
                            </div>
                            <div class="form-check">
                                <input id="situacao_moradia" name="situacao_moradia" type="radio" class="form-check-input" required value="Situação de Rua" <?php if ("$especializa[situacao_moradia]" == "Situação de Rua") {print "checked";}?>>
                                <label class="form-check-label" for="situacao_moradia">Situação de Rua</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="tel_responsavel" class="form-label">Telefone do Responsável:</label>
                            <div class="input-group has-validation">
                                <input type="text" id="tel_responsavel" class="form-control" name="tel_responsavel" onkeyup="formatarTelefone(this)" maxlength="11" required value="<?php echo "$especializa[tel_responsavel]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="email_responsavel" class="form-label">E-mail do Responsável:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="email_responsavel" name="email_responsavel" required value="<?php echo "$especializa[email_responsavel]"?>">
                            </div>
                            </div>  

                            <br>

                            <div class="col-12">
                            <label for="escolaridade_respon" class="form-label">Escolaridade do Responsável:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="escolaridade_respon" name="escolaridade_respon" required value="<?php echo "$especializa[escolaridade_respon]"?>">
                            </div>
                            </div>  

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">COMPOSIÇÃO DO NÚCLEO FAMILIAR</h5>

                            <div class="col-12">
                            <p class="mb-3">Possui irmãos?</p>
                            <div class="form-check">
                                <input id="irmao" name="irmao" type="radio" class="form-check-input" name="irmao" required value="Sim" <?php if ("$especializa[irmao]" == "Sim") {print "checked";}?>>
                                <label class="form-check-label" for="irmao">Sim</label>
                            </div>
                            <div class="form-check">
                                <input id="irmao" name="irmao" type="radio" class="form-check-input" name="irmao" required value="Não" <?php if ("$especializa[irmao]" == "Não") {print "checked";}?>>
                                <label class="form-check-label" for="irmao">Não</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="quanti_irmao" class="form-label">Quantos Irmãos?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="quanti_irmao" name="quanti_irmao" required value="<?php echo "$especializa[quanti_irmao]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="quant_pessoas" class="form-label">Quantidade de pessoas que convivem na mesma residência:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="quant_pessoas" name="quant_pessoas" required value="<?php echo "$especializa[quant_pessoas]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <strong><label for="tipo_violacao" class="form-label">Quais tipos de Violação de Direitos sob Suspeita ou Comprovada:</label></strong>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="tipo_violacao" name="tipo_violacao" required value="<?php echo "$especializa[tipo_violacao]"?>">
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">SUPOSTO AUTOR</h5>


                            <div class="col-12">
                            <label for="nome_autor" class="form-label">Nome:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="nome_autor" name="nome_autor" required value="<?php echo "$especializa[nome_autor]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="endereco_autor" class="form-label">Endereço ou local onde o suposto autor possa ser encontrado:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="endereco_autor" name="endereco_autor" required value="<?php echo "$especializa[endereco_autor]"?>">
                            </div>
                            </div> 

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">RELAÇÃO DA VÍTIMA COM O SUPOSTO AUTOR</h5>


                            <div class="col-12">
                            <label for="relacao_autor" class="form-label">A vítima e o suposto autor possui relação de parentesco?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="relacao_autor" name="relacao_autor" required value="<?php echo "$especializa[relacao_autor]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="processo_jud" class="form-label">O suposto autor responde a algum processo judicial?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="processo_jud" name="processo_jud" required value="<?php echo "$especializa[processo_jud]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="med_prote_ante" class="form-label">Há medida protetiva  decretada anteriormente em relação ao suposto autor?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="med_prote_ante" name="med_prote_ante" required value="<?php echo "$especializa[med_prote_ante]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="historico_autor" class="form-label">Ocorreram fatos semelhantes envolvendo o suposto autor anteriormente?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="historico_autor" name="historico_autor" required value="<?php echo "$especializa[historico_autor]"?>"value="<?php echo "$especializa[orgao]"?>">
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">INFORMAÇÕES PRESTADAS PELOS RESPONSÁVEIS SOBRE OS FATOS NARRADOS</h5>

                            <div class="col-12">
                            <label for="historico_vitima" class="form-label">Ocorreram fatos violentos anteriormente, relatados ou não, contra a vítima, familiares, etc.?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="historico_vitima" name="historico_vitima" required value="<?php echo "$especializa[historico_vitima]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="historico_familia" class="form-label">Há histórico de abuso sexual ou outras violências na família?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="historico_familia" name="historico_familia" required value="<?php echo "$especializa[historico_familia]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="risco_local" class="form-label">Existe alguma situação de risco para a criança e adolescente no núcleo do domicilio ou na comunidade?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="risco_local" name="risco_local" required value="<?php echo "$especializa[risco_local]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <p class="mb-3">Há testemunha dos fatos narrados? (em casso de afirmativo, indicar nomes e contatos)</p>
                            <div class="form-check">
                                <input id="testemunha" name="testemunha" type="radio" class="form-check-input" required value="Sim" <?php if ("$especializa[testemunha]" == "Sim") {print "checked";}?>>
                                <label class="form-check-label" for="testemunha">Sim</label>
                            </div>
                            <div class="form-check">
                                <input id="testemunha" name="testemunha" type="radio" class="form-check-input" required value="Não" <?php if ("$especializa[testemunha]" == "Não") {print "checked";}?>>
                                <label class="form-check-label" for="testemunha">Não</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="testemunhas" class="form-label">Há testemunha dos fatos narrados? (em casso de afirmativo, indicar nomes e contatos) <br>Nome da testemunha:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="testemunhas" name="testemunhas" required value="<?php echo "$especializa[testemunhas]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>
                            
                            <div class="col-12">
                            <label for="contato_testemunha" class="form-label">Endereço e/ou Telefone:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="contato_testemunha" name="contato_testemunha" required value="<?php echo "$especializa[contato_testemunha]"?>">
                                <div class="invalid-feedback">
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">SAÚDE</h5>

                            <div class="col-12">
                            <label for="acompanhamento" class="form-label">Local de acompanhamento de saúde da criança e proficional de referência:</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="acompanhamento" name="acompanhamento" required value="<?php echo "$especializa[acompanhamento]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="atendimento_vit" class="form-label">Após a notícia da violencia a criança/adolescente rescebeu atendimento pelo equipamento de saúde?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="atendimento_vit" name="atendimento_vit" required value="<?php echo "$especializa[atendimento_vit]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="doenca" class="form-label">A criança apresenta alguma doença?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="doenca" name="doenca" required value="<?php echo "$especializa[doenca]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="tratamento_diario" class="form-label">A criança faz uso de medicação, ou realiza algum procedimento contínuo de tratamento?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="tratamento_diario" name="tratamento_diario" required value="<?php echo "$especializa[tratamento_diario]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="acomp_psicologico" class="form-label">A criança já realiza/realizou acompanhamento psicológico? (Período e Psicólogo de Referência)</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="acomp_psicologico" name="acomp_psicologico" required value="<?php echo "$especializa[acomp_psicologico]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="procedimento" class="form-label">Quais procedimentos realizados?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="procedimento" name="procedimento" required value="<?php echo "$especializa[procedimento]"?>">
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">EDUCAÇÃO</h5>

                            <div class="col-12">
                            <label for="local_estuda" class="form-label">Local onde estuda? (nome e endereço):</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="local_estuda" name="local_estuda" required value="<?php echo "$especializa[local_estuda]"?>">
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">ASSISTENCIA SOCIAL</h5>

                            <div class="col-12">
                            <p class="mb-3">Possui documentação básica?</p>
                            <div class="form-check">
                                <input id="documentacao" name="documentacao" type="radio" class="form-check-input" required value="Certidão de nascimento" <?php if ("$especializa[documentacao]" == "Certidão de nascimento") {print "checked";}?>>
                                <label class="form-check-label" for="documentacao">Certidão de nascimento</label>
                            </div>
                            <div class="form-check">
                                <input id="documentacao" name="documentacao" type="radio" class="form-check-input" required value="Carteira de identidade" <?php if ("$especializa[documentacao]" == "Carteira de identidade") {print "checked";}?>>
                                <label class="form-check-label" for="documentacao">Carteira de identidade</label>
                            </div>
                            <div class="form-check">
                                <input id="documentacao" name="documentacao" type="radio" class="form-check-input" required value="Título eleitoral" <?php if ("$especializa[documentacao]" == "Título eleitoral") {print "checked";}?>>
                                <label class="form-check-label" for="documentacao">Título eleitoral</label>
                            </div>
                            <div class="form-check">
                                <input id="documentacao" name="documentacao" type="radio" class="form-check-input" required value="CPF" <?php if ("$especializa[documentacao]" == "CPF") {print "checked";}?>>
                                <label class="form-check-label" for="documentacao">CPF</label>
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <p class="mb-3">A família ou o adolescente está incluso no Cadastro Único da Assistência Social (Cad.Único)?</p>
                            <div class="form-check">
                                <input id="cad_unico" name="cad_unico" type="radio" class="form-check-input" required value="Sim" <?php if ("$especializa[cad_unico]" == "Sim") {print "checked";}?>>
                                <label class="form-check-label" for="cad_unico">Sim</label>
                            </div>
                            <div class="form-check">
                                <input id="cad_unico" name="cad_unico" type="radio" class="form-check-input" required value="Não" <?php if ("$especializa[cad_unico]" == "Não") {print "checked";}?>>
                                <label class="form-check-label" for="cad_unico">Não</label>
                                
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="rede_atendimento" class="form-label">Em caso de positivo, a família e ou o adolescente está referenciado em qual equipamento?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="rede_atendimento" name="rede_atendimento" required value="<?php echo "$especializa[rede_atendimento]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="bpc_" class="form-label">É beneficiário dos Programas, projetos, serviços e da transferência de renda (Programa Bolsa Família - PBF), Cartão Família Carioca e Benefício de Prestação Continuada - BPC? Se sim: <br> Em quais serviços o atendimento é realizado?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="bpc_" name="bpc_"  required value="<?php echo "$especializa[bpc_]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="bpc" class="form-label">Quais benefícios sociossistenciais recebe?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="bpc" name="bpc" required value="<?php echo "$especializa[bpc]"?>">
                            </div>
                            </div>

                            <br>


                            <div class="col-12">
                            <label for="violacao_direitos" class="form-label">Há suspeita de violações de direitos referentes à criança/ adolescente e a família?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="violacao_direitos" name="violacao_direitos" required value="<?php echo "$especializa[violacao_direitos]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <label for="fragilidade_familiar" class="form-label">Descreva se no atendimento foram observadas fragilidades na relação familiar. <br>Foram identificadas situações de vulnerabilidade social e/ou fragilidade de vínculos familiares e comunitários?</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="fragilidade_familiar" name="fragilidade_familiar" required value="<?php echo "$especializa[fragilidade_familiar]"?>">
                            </div>
                            </div>

                            <br>

                            <div class="col-12">
                            <p class="mb-3">Foi realizado encaminhamento ao CONSELHO TUTELAR?</p>
                            <div class="form-check">
                                <input id="conselho_tutelar" name="conselho_tutelar" type="radio" class="form-check-input" required value="Sim" <?php if ("$especializa[conselho_tutelar]" == "Sim") {print "checked";}?>>
                                <label class="form-check-label" for="conselho_tutelar">Sim</label>
                            </div>
                            <div class="form-check">
                                <input id="conselho_tutelar" name="conselho_tutelar" type="radio" class="form-check-input" required value="Não" <?php if ("$especializa[conselho_tutelar]" == "Não") {print "checked";}?>>
                                <label class="form-check-label" for="conselho_tutelar">Não</label>
                            </div>
                            </div>

                            <br>

                            <hr class="my-4">
                            <h5 class="mb-3">MEDIDAS PROTETIVAS</h5>

                            </div>
                            <div class="col-12">
                            <label for="med_protetiva" class="form-label">Quais são as medidas protetivas necessárias?</label>
                            <div class="input-group has-validation">
                                <textarea type="text" class="form-control" id="med_protetiva" name="med_protetiva" required><?php echo "$especializa[med_protetiva]"?></textarea>
                            </div>
                            </div>

                            <br>

                            </div>
                            <div class="col-12">
                            <label for="relato_crianca" class="form-label">Relato da Criança/Adolescente:</label>
                            <div class="input-group has-validation">
                                <textarea type="text" class="form-control" id="relato_crianca" name="relato_crianca"  required><?php echo "$especializa[relato_crianca]"?></textarea>
                            </div>
                            </div>

                            <br>
                           
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
                        </form>
                    </div>
                    </div>
                </main>

                <footer class="my-5 pt-5 text-muted text-center text-small">
                    
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