<?php
session_start();
if (isset($_SESSION['senha'])) {
    if (isset($_POST['btnEnviar'])) {
        $senha = $_POST['txtSenha'];
        $senhaSalva = $_SESSION['senha'];
        if (password_verify($senha, $senhaSalva)) {
            echo "<h1>LOGADO</h1>";
        } else {
            echo "<h1>SENHA ERRADA</h1>";
        }
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar: Senha Segura</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="txtSenha">DIGITE A SENHA ANTERIOR:</label>
        <input type="password" id="txtSenha" name="txtSenha">
        <input type="submit" value="Enviar" id="btnEnviar" name="btnEnviar">
    </form>
</body>

</html>