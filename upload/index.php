<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enivar Arquivos</title>
</head>

<body>
    <?php
    //VERIFICAR SE FOI ENVIADO
    if (isset($_POST['btnEnviar'])) {
        //Pegando o nome do arquivo
        $img = $_FILES['img']['name'];
        //CRIANDO OS FORMATOS PERMITIDOS
        $fmtPermitidos = ["png", "jpeg", "jpg"];
        //PEGANDO O FORMATO DO ARQUIVO ENVIADO
        $fmt = pathinfo($img, PATHINFO_EXTENSION); //Verificando qual e o formato do arquivo
        // echo $fmt;

        //VERIFICANDO SE O FORMATO ESTA CORRETO
        if (in_array($fmt, $fmtPermitidos)) {//VERIFICA SE O ARQIVO ESTA NO ARRAY
            //Alterando o nome do arquivo
            $pasta = "imagens/";//PASTA DE DESTINO
            $tmp = $_FILES['img']['tmp_name'];//PASTA ATUAL DO ARQUIVO
            $novoNome = uniqid() . ".$fmt"; //PEGA UM ID UNICO E ADICIONA A EXTENSÃO ESCOLHIDA
            // $novoNome = $img; // COPIANDO O NOME E A EXTENSAO DO ARQUIVO
            if (move_uploaded_file($tmp, $pasta.$novoNome)){//MOVO UMA CÓPIA DO ARQUIVO PARA A PASTA DE DESTINO
                $msg = "UPLOAD FEITO COM SUCESSO!";
            } else {
                $msg = "ERRO NO UPLOAD";
            }
        } else {
            $msg =  "FORMATO REUSADO!";
        }
    }
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <label for="img">Foto: </label>
            <input type="file" name="img" id="img">
            <input type="submit" value="Enviar" name="btnEnviar" id="btnEnviar">
        </form>
    </main>
    <main>
        <h1>
            <?php
            if (isset($_POST['btnEnviar'])) {
                echo $msg;
                // var_dump($_FILES);
            }
            ?>
        </h1>
    </main>
</body>

</html>