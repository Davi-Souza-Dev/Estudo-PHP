<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Apresente-se</h1>
    </header>
    <main>
        <?php
            $nome = $_POST["txtNome"] ?? "Desconhecido";//?? - para caso estever vazio exibe menssagem sem nada
            $sNome = $_POST["txtSNome"] ?? " ";
            echo "<h1>Olá $nome $sNome</h1>"
        
        ?>
    </main>
</body>

</html>