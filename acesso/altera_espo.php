<?php
	
	
	 require '..\conexao.php';
	
	if(isset($_POST))
	{
		$id = $_POST["id"];
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
	
		
		$sqlAlteracao = "UPDATE revelacao_espontanea SET data_revelacao='$data_revelacao', nome='$nome', sexo='$sexo', data_nascimento='$data_nascimento', idade='$idade', com_deficiencia='$com_deficiencia', filiacao='$filiacao', responsavel_legal='$responsavel_legal', endereco='$endereco', cidade='$cidade', telefone='$telefone', rede_atendimento='$rede_atendiimento', violacao='$violacao', descricao='$descricao' WHERE id = '$id'";
		$res = mysqli_query($conexao, $sqlAlteracao);

        if ($conexao->query($sqlAlteracao) === TRUE) {
			echo '<script>alert("Revelação Espontânea atualizada com sucesso")</script>';
		  } else {
			echo '<script>alert("Erro ao atualizada a Revelação Espontânea")</script>' . $sqlAlteracao . "<br>" . $conexao->error;
		  }
		  
		  $conexao->close();		 
		
		echo '<script>location.href="Exibir_espontanea.php"</script>';
	}
?>