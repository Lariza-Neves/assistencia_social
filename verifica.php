<?PHP
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
 
//Conexão mysql
require 'conexao.php';
//Comando SQL de verificação de autenticação
$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' ";
 
$resultado = mysqli_query($conexao,$sql) or die ("Erro na seleção da tabela.");
$usuario = mysqli_fetch_assoc($resultado);



//Caso consiga logar cria a sessão
if (mysqli_num_rows ($resultado) > 0) {

        
        // session_start inicia a sessão
        session_start();
         
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header("location:acesso/index.php");
     
    }
 
//Caso contrário redireciona para a página de autenticação
else {
    //Destrói
  
     session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    //Redireciona para a página de autenticação
    header('location:index.php?aut=true');
   
    
     
}
?>