<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Apresente-se</h1>
    </header>
    <section>
        <form action="formDados.php" method="post">
            <label for="txtNome">Nome: </label>
            <input type="text" name="txtNome" id="txtNome">
            <label for="txtSNome">Sobrenome: </label>
            <input type="text" name="txtSNome" id="txtSNome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>

</html>