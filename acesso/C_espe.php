<?php
	 require '..\conexao.php';
	
	if(isset($_POST)){
		
		$data = $_POST["data"];
		$municipio = $_POST["municipio"];
		$orgao = $_POST["orgao"];
		$profissional = $_POST["profissional"];
		$ende_orgao = $_POST["ende_orgao"];
		$telefone= $_POST["telefone"];
		$data_evento= $_POST["data_evento"];
		$nome_crianca= $_POST["nome_crianca"];
		$deficiencia= $_POST["deficiencia"];
		$tecnologia_assistiva= $_POST["tecnologia_assistiva"];
		$data_nascimento= $_POST["data_nascimento"];
		$idade= $_POST["idade"];
		$sexo= $_POST["sexo"];
		$naturalidade= $_POST["naturalidade"];
		$nacionalidade= $_POST["nacionalidade"];
		$filiacao = $_POST["filiacao"];
		$nome_responsavel = $_POST["nome_responsavel"];
		$situacao_moradia = $_POST["situacao_moradia"];
		$tel_responsavel = $_POST["tel_responsavel"];
		$email_responsavel= $_POST["email_responsavel"];
		$escolaridade_respon= $_POST["escolaridade_respon"];
		$irmao= $_POST["irmao"];
		$quanti_irmao= $_POST["quanti_irmao"];
		$quant_pessoas= $_POST["quant_pessoas"];
		$tipo_violacao= $_POST["tipo_violacao"];
		$nome_autor= $_POST["nome_autor"];
		$endereco_autor= $_POST["endereco_autor"];
		$relacao_autor= $_POST["relacao_autor"];
		$processo_jud= $_POST["processo_jud"];
		$med_prote_ante= $_POST["med_prote_ante"];
		$historico_autor= $_POST["historico_autor"];
		$historico_vitima= $_POST["historico_vitima"];
		$historico_familia = $_POST["historico_familia"];
		$risco_local = $_POST["risco_local"];
		$testemunha = $_POST["testemunha"];
		$testemunhas = $_POST["testemunhas"];
		$contato_testemunha = $_POST["contato_testemunha"];
		$acompanhamento= $_POST["acompanhamento"];
		$atendimento_vit= $_POST["atendimento_vit"];
		$doenca= $_POST["doenca"];
		$tratamento_diario= $_POST["tratamento_diario"];
		$acomp_psicologico= $_POST["acomp_psicologico"];
		$procedimento= $_POST["procedimento"];
		$local_estuda= $_POST["local_estuda"];
		$documentacao= $_POST["documentacao"];
		$cad_unico= $_POST["cad_unico"];
		$rede_atendimento= $_POST["rede_atendimento"];
		$bpc_= $_POST["bpc_"];
		$bpc= $_POST["bpc"];
		$violacao_direitos= $_POST["violacao_direitos"];
		$fragilidade_familiar= $_POST["fragilidade_familiar"];
		$conselho_tutelar= $_POST["conselho_tutelar"];
		$med_protetiva= $_POST["med_protetiva"];
		$relato_crianca= $_POST["relato_crianca"];

																			
		
		$sqlInsercao = "INSERT INTO especializada VALUES(null, '$data', '$municipio', '$orgao','$profissional', '$ende_orgao', '$telefone', '$data_evento', '$nome_crianca', '$deficiencia', '$tecnologia_assistiva', '$data_nascimento', '$idade', '$sexo', '$naturalidade', '$nacionalidade', '$filiacao', '$nome_responsavel', '$situacao_moradia', '$tel_responsavel', '$email_responsavel', '$escolaridade_respon', '$irmao', '$quanti_irmao', '$quant_pessoas', '$tipo_violacao', '$nome_autor', '$endereco_autor', '$relacao_autor', '$processo_jud', '$med_prote_ante', '$historico_autor', '$historico_vitima', '$historico_familia', '$risco_local', '$testemunha', '$testemunhas', '$contato_testemunha', '$acompanhamento', '$atendimento_vit', '$doenca', '$tratamento_diario', '$acomp_psicologico', '$procedimento', '$local_estuda', '$documentacao', '$cad_unico', '$rede_atendimento', '$bpc_', '$bpc', '$violacao_direitos', '$fragilidade_familiar', '$conselho_tutelar', '$med_protetiva', '$relato_crianca')";
		
		if ($conexao->query($sqlInsercao) === TRUE) {
			echo '<script>alert("Escuta Especializada realizada com sucesso")</script>';
		  } else {
			echo '<script>alert("Erro ao realizar a Escuta Especializada")</script>' . $sqlInsercao . "<br>" . $conexao->error;
		  }
		  
		  $conexao->close();

		echo '<script>location.href="index.php"</script>';

	}
?>