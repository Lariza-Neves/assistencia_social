<?php
	 require '..\conexao.php';
	
	if(isset($_POST)){
		
		$data_encaminha = $_POST["data_encaminha"];
		$local_recebido = $_POST["local_recebido"];
		$local_encaminha = $_POST["local_encaminha"];
		$situacao = $_POST["situacao"];


		
																			
		
		$sqlInsercao = "INSERT INTO encaminhamento_espe VALUES(null, '$data_encaminha', '$local_recebido', '$local_encaminha', '$situacao')";
		
		if ($conexao->query($sqlInsercao) === TRUE) {
			echo '<script>alert("Encaminhamento realizado com sucesso")</script>';
		  } else {
			echo '<script>alert("Erro ao realizar o Encaminhamento")</script>' . $sqlInsercao . "<br>" . $conexao->error;
		  }
		  
		  $conexao->close();		 
		
		echo '<script>location.href="index.php"</script>';

	}
?>