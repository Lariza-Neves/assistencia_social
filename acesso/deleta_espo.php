<?php
	require '..\conexao.php';
	
	if(isset($_GET))
	{
		$id = $_GET["id"];
		
		$sqlDelecao = "DELETE FROM revelacao_espontanea WHERE id = '$id'";	
		
		$res = mysqli_query($conexao, $sqlDelecao);
		
		if (mysqli_affected_rows($conexao) > 0)
		{
			echo '<script>alert("Excluido com Sucesso")</script>';	
		}
		else
		{
			echo '<script>alert("Erro ao excluir")</script>';
		}
		
		echo '<script>location.href="Exibir_espontanea.php"</script>';
		
		mysqli_close($conexao);
	}
?>