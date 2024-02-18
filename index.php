<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="2138227.png">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<?php

if (isset($_GET, $_GET['aut'])) 
{
  echo "<script>alert('Login ou senha inválidos.');</script>";
  }
  if (isset($_GET, $_GET['sair'])) 
{
    
  }
?>
<body>
     <div class= "main-login"> 
        <div class="left-login">  
          <!-- <img src="css/" class="left-login-img" alt="...">-->
        </div>
            <div class="right-login"> 
                <form class="right-login" action="verifica.php" method="post">
                <div class="card-login"> 
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuario: </label>
                        <input type="text" placeholder="usuario" name="login" id="login" required="required"> 
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha: </label>
                        <input type="password"  placeholder="senha" name="senha" id="senha" required="required"> 
                    </div>
                    <input class="btn-login" type="submit" value="Entrar">
                    
                </div>
                </form>
            </div>
     </div>
</body>
</html>