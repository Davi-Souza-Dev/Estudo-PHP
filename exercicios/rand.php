<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aleatorio</title>
</head>
<body>
    <h1>Gere um número</h1>
    <form action="rand.php" method="POST">
        <p>
            <?php 
                if(isset($_POST['btnGerar'])){
                    $num = mt_rand(0,100);
                    echo "Número gerado: $num";
                }
            ?>
        </p>
        <input type="submit" name="btnGerar" id="btnGerar" value="Gerar">
    </form>

</body>
</html>