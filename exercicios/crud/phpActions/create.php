<?php 
    //REQUIRE NO BANCO DE DADOS
    require_once 'dbConnect.php';
    session_start();
    if(isset($_POST['btnCadastrar'])){
        $txtNome = mysqli_escape_string($connect, $_POST['txtNome']);
        $txtSobrenome = mysqli_escape_string($connect, $_POST['txtSobrenome']);
        $txtEmail = mysqli_escape_string($connect, $_POST['txtEmail']);
        $numIdade = mysqli_escape_string($connect, $_POST['numIdade']);

        //CRIANDO A QUERY DE INSERÇÃO
        $query = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$txtNome','$txtSobrenome','$txtEmail','$numIdade')";

        //VERIFICANDO SE A QUERY FOI 
        if(mysqli_query($connect, $query)){
            $_SESSION['msg'] = "Cadastro Concluido";
            header("LOCATION:   ../index.php?");
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar";
            header("LOCAT ION: ../index.php?");
        }
    }
?>