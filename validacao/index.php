<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validaçõa PHP</title>
</head>
<body>

    <!-- VERIFICAÇÔES -->
    <?php 
        //VERIFICAR SE FOI ENVIADO
        if(isset($_POST['btnEnviar'])){
            $errors = []; //GUARDA OS ERROS SE TIVER;
            //TRATANDO OS DADOS
            // $nome = $_POST['txtNome'];
            // $idade = $_POST['numIdade'];
            // $email = $_POST['txtEmail'];
            // $tel = $_POST['numTel'];

            //CRIANDO A VALIDAÇÃO
            //VERIFICA SE O VALOR ENVIADO DA IDADE E DO TIPO INT
            if(!$idade = filter_input(INPUT_POST, "numIdade", FILTER_VALIDATE_INT)){
                $errors[] = "Idade dever ser um número";
            } 
            //VERIFICA SE O EMAIL ESTA COM A SINTAXE CORRETA
            if(!$email = filter_input(INPUT_POST, 'txtEmail', FILTER_VALIDATE_EMAIL)){
                $errors[] = "Email invalido";
            }

            if(!$tel = filter_input(INPUT_POST, 'numTel', FILTER_VALIDATE_INT)){
                $errors[] = "Telefone invalido";
            }

            //VERIFICA SE O ARR ERROS POSSUI ERRO, SE SIM EXIBE CADA UM DELES 
            if(!empty($errors)){
                foreach($errors as $error ){
                    echo "<li> $error </li>";
                }
            }else{
                echo "<main><h1>Dados corretos e enviado!</h1></main>";
            }
        }
    ?>

    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="txtNome">Nome: </label>
        <input type="text" name="txtNome" id="txtNome">
        <label for="numIdade">Idade: </label>
        <input type="text" name="numIdade" id="numIdade">
        <label for="txtEmail">Email: </label>
        <input type="text" name="txtEmail" id="txtEmail">
        <label for="numTel">Telefone: </label>
        <input type="text" name="numTel" id="numTel">
        <input type="submit" value="Enviar" name="btnEnviar" id="btnEnviar">
        </form>
    </main>
</body>
</html>