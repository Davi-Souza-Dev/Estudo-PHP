<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio PHP</title>
</head>
<body>
    <h1>
        <?php 
            echo "HELLO WORLD!! \u{1F913}";
            // print "HELLO WORLD!!";
        ?>
    </h1>
    <p>SAIMOS DA MALDIÇÃO KKKKK</p>
    <p>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");//ALTERA O FUSO HORARIO PARA SAO PAULO
            echo "HOJE É DIA " . date("d/M/Y");//EXIBE A DATA E HORA DO SERVIDOR
            echo " e são exatamente " . date("G:i:s");
        ?>
    </p>
    <p>
        DADOS DO SERVIDOR
        <?php 
            phpinfo();
        ?>
    </p>
</body>
</html>