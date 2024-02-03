<?php
	 require '..\conexao.php';
	
	if(isset($_POST)){
		
		$data_revelacao = $_POST["data_revelacao"];
		$nome = $_POST["nome"];
		$sexo = $_POST["sexo"];
		$data_nascimento = $_POST["data_nascimento"];
		$idade= $_POST["idade"];
		$com_deficiencia= $_POST["com_deficiencia"];
		$filiacao= $_POST["filiacao"];
		$responsavel_legal= $_POST["responsavel_legal"];
		$endereco= $_POST["endereco"];
		$cidade= $_POST["cidade"];
		$telefone= $_POST["telefone"];
		$rede_atendiimento= $_POST["rede_atendimento"];
		$violacao= $_POST["violacao"];
		$descricao= $_POST["descricao"];


		
																			
		
		$sqlInsercao = "INSERT INTO revelacao_espontanea VALUES(null, '$data_revelacao', '$nome', '$sexo', '$data_nascimento', '$idade', '$com_deficiencia', '$filiacao', '$responsavel_legal', '$endereco', '$cidade', '$telefone', '$rede_atendiimento', '$violacao', '$descricao')";
		
		if ($conexao->query($sqlInsercao) === TRUE) {
			echo '<script>alert("Revelação Espontânea realizada com sucesso")</script>';
		  } else {
			echo '<script>alert("Erro ao realizar a Revelação Espontânea")</script>' . $sqlInsercao . "<br>" . $conexao->error;
		  }
		  
		  $conexao->close();		 
		
		echo '<script>location.href="index.php"</script>';

	}
?>