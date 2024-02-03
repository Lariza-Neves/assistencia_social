<?php
	
	
	 require '..\conexao.php';
	
	if(isset($_POST))
	{
		$id = $_POST["id"];
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
	
		
		$sqlAlteracao = "UPDATE especializada SET  data='$data', municipio='$municipio', orgao='$orgao', profissional='$profissional', ende_orgao='$ende_orgao', telefone='$telefone', data_evento='$data_evento', nome_crianca='$nome_crianca', deficiencia='$deficiencia', tecnologia_assistiva='$tecnologia_assistiva', data_nascimento='$data_nascimento', idade='$idade', sexo='$sexo', naturalidade='$naturalidade', nacionalidade='$nacionalidade', filiacao='$filiacao', nome_responsavel='$nome_responsavel', situacao_moradia='$situacao_moradia', tel_responsavel='$tel_responsavel', email_responsavel='$email_responsavel', escolaridade_respon='$escolaridade_respon', irmao='$irmao', quanti_irmao='$quanti_irmao', quant_pessoas='$quant_pessoas', tipo_violacao='$tipo_violacao', nome_autor='$nome_autor', endereco_autor='$endereco_autor', relacao_autor='$relacao_autor',  processo_jud='$processo_jud', med_prote_ante='$med_prote_ante', historico_autor='$historico_autor', historico_vitima='$historico_vitima', historico_familia='$historico_familia', risco_local='$risco_local', testemunha='$testemunha', testemunhas='$testemunhas', contato_testemunha='$contato_testemunha', acompanhamento='$acompanhamento', atendimento_vit='$atendimento_vit', doenca='$doenca', tratamento_diario='$tratamento_diario', acomp_psicologico='$acomp_psicologico', procedimento='$procedimento', local_estuda='$local_estuda',documentacao='$documentacao', cad_unico='$cad_unico', rede_atendimento='$rede_atendimento', bpc_='$bpc_', bpc='$bpc', violacao_direitos='$violacao_direitos', fragilidade_familiar='$fragilidade_familiar', conselho_tutelar='$conselho_tutelar', med_protetiva='$med_protetiva', relato_crianca='$relato_crianca' WHERE id = '$id'";
		$res = mysqli_query($conexao, $sqlAlteracao);

        if ($conexao->query($sqlAlteracao) === TRUE) {
			echo '<script>alert("Escuta Especilizada atualizada com sucesso")</script>';
		  } else {
			echo '<script>alert("Erro ao atualizada a Escuta Especilizada")</script>' . $sqlAlteracao . "<br>" . $conexao->error;
		  }
		  
		  $conexao->close();		 
		
		echo '<script>location.href="Exibir_especializada.php"</script>';
	}
?>