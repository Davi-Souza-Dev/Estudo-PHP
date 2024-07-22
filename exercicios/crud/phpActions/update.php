<?php 
    //REQUIRE NO BANCO DE DADOS
    require_once 'dbConnect.php';
    session_start();
    if(isset($_POST['btnAtualizar'])){
        $txtNome = mysqli_escape_string($connect, $_POST['txtNome']);
        $txtSobrenome = mysqli_escape_string($connect, $_POST['txtSobrenome']);
        $txtEmail = mysqli_escape_string($connect, $_POST['txtEmail']);
        $numIdade = mysqli_escape_string($connect, $_POST['numIdade']);
        $numID = mysqli_escape_string($connect,$_POST['numID']);
        //CRIANDO A QUERY DE INSERÇÃO
        $query = "UPDATE clientes SET nome = '$txtNome', sobrenome = '$txtSobrenome', email = '$txtEmail', idade = '$numIdade' WHERE ID = '$numID'";

        //VERIFICANDO SE A QUERY FOI 
        if(mysqli_query($connect, $query)){
            $_SESSION['msg'] = "Atualização Concluida!";
            header("LOCATION:   ../index.php?");
        }else{
            $_SESSION['msg'] = "Erro ao Atualizar!";
            header("LOCAT ION: ../index.php?");
        }
    }
?>