<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Conversor de moedas</title>
</head>

<body>
  <main>
    <h1>CONVERSOR DE MOEDAS</h1>
    <p>Quanto de dinheiro você possui</p>
    <form action="conversor.php" method="POST">
      <input type="number" name="numDinheiro" id="numDinheiro">
      <input type="submit" value="Converter" id="btnConverter" name="btnConverter">
    </form>
  </main>
  <main>
    <p>
      <?php
      if (isset($_POST['btnConverter'])) {
        //UTILIZANDO A API
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        //CHAMANDO A API      
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);

        $cot = $dados["value"][0]["cotacaoCompra"];
        $real = $_POST['numDinheiro'];
        $dolar = $real / $cot;
        //FAZENDO A FORMATAÇÂO UNICA
        // $dolar = number_format($dolar,2,",",".");
        // echo "Você tem: $$dolar";
        // CRIAR PADRÃO DE FORMATAÇÃO
        $pdr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Você tem: " . numfmt_format_currency($pdr, $dolar, "USD");
      }
      ?>
    </p>
  </main>
</body>

</html>

<?php

?>