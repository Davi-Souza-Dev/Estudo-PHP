<?php
//PEGANDO O Arquivo
$arquivo = "arquivoTxt.txt";
$tamanhoTxt = filesize($arquivo);

//ABRINDO O arquivo e pegando o tamanho dele
$arquivoTxt = fopen($arquivo, 'r');

//INSERINDO CONTEUDO com modulo 'a'
// $conteudo = "Teste de arquivo\r\n";
// fwrite($arquivoTxt, $conteudo);

//Percorrendo o arquivo enquanto não for o final do arquivo
while (!feof($arquivoTxt)) {
    $linha = fgets($arquivoTxt, $tamanhoTxt) . "<br>";
    echo $linha;
}
// //FECHANDO O ARQUIVO
// fclose($arquivoTxt);
