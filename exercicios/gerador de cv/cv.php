<?php 
//VERIFICAR SE O BOTÃO DE GERAR FOI CLICADO
    if(isset($_POST['btnGerar'])){
        //PEGANDO AS INFORMAÇÔES 
        $txtNome = $_POST['txtNome'];
        $txtEmail = $_POST['txtEmail'];
        $txtTel = $_POST['txtTel'];
        $numIdade = $_POST['numIdade'];
        $txtProf = $_POST['txtProf'];
        $txtExp = $_POST['txtExp'];

        //PEGANDO A IMAGEM ENVIADA
        $fmtPermitidos = ['png','jpg','jpeg'];//CRIANDO OS FORMATOS PERMITIDOS
        //PEGANDO A EXTENSÃO ENVIADA
        $fmt = pathinfo($_FILES['imgFoto']['name'],PATHINFO_EXTENSION);
        
        // var_dump($_FILES);
        //VERIFICANDO SE A EXTENSÃO ESTA CORRETA
        if(in_array($fmt, $fmtPermitidos)){
            $pasta = "fotos/";
            $pastaAtual = $_FILES['imgFoto']['tmp_name'];
            $nomeNovo = uniqid() . "$fmt";
            move_uploaded_file($pastaAtual,$pasta.$nomeNovo);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styleCV.css" />
    <title>Curriculo pronto</title>
  </head>
  <body>
    <header>
      <img src="<?php echo $pasta.$nomeNovo?>" id="imgFoto" class="imgFoto" />
      <div class="cvInfoContainer">
          <h1 id="txtNome" class="txtNome">
            <?php 
              echo $txtNome;
            ?>
          </h1>
          <h2 id="txtProf" class="txtProf">
          <?php 
              echo $txtProf;
            ?>
          </h2>
      </div>
    </header>
    <section class="cv">
      <div class="cvInfoContainer">
        <h1>Contato</h1>
        <ul>
          <li>Telefone:            
            <?php 
              echo $txtTel;
            ?></li>
          <li>Email:
            <?php 
              echo $txtEmail;
            ?></li>
        </ul>
      </div>
      <div class="cvInfoContainer">
        <h1>Experiência</h1>
        <p class="txtExp" id="txtExp">
        <?php 
              echo $txtExp;
            ?>
        </p>
      </div>
    </section>
  </body>
</html>
