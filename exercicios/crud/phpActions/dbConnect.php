<?php 
//Fazendo a conexão com o banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$dbName = "crudphp";

$connect = mysqli_connect($severname,$username,$password,$dbName);

if(mysqli_connect_error()){
    echo "ERRO AO CONECTAR: " . mysqli_connect_error();
}
?>