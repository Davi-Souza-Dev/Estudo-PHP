<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegEx</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="txtString">Digite uma string:</label>
        <input type="text" id="txtString" name="txtString">
        <button type="submit" id="btnVerify" name="btnVerify">Verificar</button>
    </form>
    <h1>
        <?php
        //FAZENDO VERIFICAÇÕES COM EXPRESSOES REGULARES
        if (isset($_POST['btnVerify'])) {
            $string = $_POST['txtString'];
            // $padrao = "/^[a-z0-9]+$/i";

            //Exemplo - Verificar se o email esta formatado certo
            // $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

            //Exemplo - Verificando se a data esta no padrão desejado
            $padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
            if (preg_match($padrao, $string)) {
                echo "Válido";
                echo "<hr>";
                echo $string;
            } else {
                echo "Inválido";
                echo "<hr>";
            }
        }


        ?>
    </h1>
</body>

</html>