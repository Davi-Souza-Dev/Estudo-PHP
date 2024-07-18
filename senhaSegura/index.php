<?php 
    session_start();
    $_SESSION['senha'] = '';
    if(isset($_POST['btnEnviar'])){
        $senha = $_POST['txtSenha'];        
        $senhaSegura = password_hash($senha,PASSWORD_DEFAULT);
        $_SESSION['senha'] = $senhaSegura;
    }   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha Segura</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="txtSenha">Digite a senha:</label>
        <input type="password" id="txtSenha" name="txtSenha">
        <input type="submit" value="Enviar" id="btnEnviar" name="btnEnviar">
    </form>
    <p>Resultado: <br/>
        <?php 
            if(isset($_POST['btnEnviar'])){
                echo "<strong>Senha digitada</strong>: $senha <br>";
                echo "<strong>Senha Segura:</strong> $senhaSegura <br>";
                echo '<a href="logar.php">Fazer login</a> <br>';
            }
        ?>
    </p>
</body>
</html>