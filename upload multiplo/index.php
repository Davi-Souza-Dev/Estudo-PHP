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
        //CRIANDO OS FORMATOS PERMITIDOS
        $fmtPermitidos = ["png", "jpeg", "jpg"];

        //VERIFICANDO A QUANTIDADE DE ARQUIVO ENVIADOS
        $qtdeIMG = count($_FILES['img']['name']);
        $cont = 0;
        while ($cont < $qtdeIMG) {
            //PEGANDO O FORMATO DO ARQUIVO ENVIADo
            $fmt = pathinfo($_FILES['img']['name'][$cont], PATHINFO_EXTENSION);
            //VERIFICANDO SE O FORMATO ESTA CORRETO
            if (in_array($fmt, $fmtPermitidos)) {
                //Alterando o nome do arquivo
                $pasta = "imagens/"; //PASTA DE DESTINO
                $tmp = $_FILES['img']['tmp_name'][$cont]; //PASTA ATUAL DO ARQUIVO
                $novoNome = uniqid() . ".$fmt"; //PEGA UM ID UNICO E ADICIONA A EXTENSÃO ESCOLHIDA
                // $novoNome = $img; // COPIANDO O NOME E A EXTENSAO DO ARQUIVO
                if (move_uploaded_file($tmp, $pasta . $novoNome)) { //MOVO UMA CÓPIA DO ARQUIVO PARA A PASTA DE DESTINO
                    $msg = "UPLOAD FEITO COM SUCESSO! ENVIADO PARA $pasta$novoNome";
                } else {
                    $msg = "ERRO NO UPLOAD";
                }
            } else {
                $msg =  "FORMATO REUSADO!";
            }
            $cont++;
        }
    }
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <label for="img">Foto: </label>
            <input type="file" name="img[]" id="img[]" multiple>
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