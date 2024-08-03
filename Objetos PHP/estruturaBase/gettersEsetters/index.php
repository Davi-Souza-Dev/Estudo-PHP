<?php
//GET = pegar o valor atual | SET = altera o valor atual
class Login
{
    public $email;
    public $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function logar()
    {
        if ($this->email == "teste@teste.com" && $this->senha == "12345") {
            echo "Logado com Sucesso!";
        } else {
            echo "Dados Inválidos";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login feito com classe PHP</title>
</head>

<body>
    <h1>Login</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="txtEmail"></label>
        <input type="text" name="txtEmail" id="txtEmail">
        <label for="txtSenha"></label>
        <input type="password" name="txtSenha" id="txtSenha">
        <button type="submit" name="btnEnviar" id="btnEnviar">Logar</button>
    </form>
    <button id="btnView">Ver Login e Senha Padrão</button>
    <h1>
        <?php
        $login = new Login();
        if (isset($_POST['btnEnviar'])) {
            $login->setEmail($_POST["txtEmail"]);
            $login->setSenha($_POST["txtSenha"]);
            $login->logar();
            echo "<hr>";
            echo "Email: " . $login->getEmail() . "<br>";
            echo "Senha: " . $login->getSenha() . "<br>";
        }
        ?>
    </h1>
    <script>
        const btnView = document.getElementById("btnView");
        btnView.addEventListener("click", () => {
            alert('Email: teste@teste.com | Senha: 12345');
        });
    </script>
</body>

</html>