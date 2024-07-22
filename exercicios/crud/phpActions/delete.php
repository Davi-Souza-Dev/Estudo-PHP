<?php 
    //REQUIRE NO BANCO DE DADOS
    require_once 'dbConnect.php';
    session_start();
    if(isset($_POST['btnDelete'])){
        $numID = mysqli_escape_string($connect,$_POST['numID']);
        //CRIANDO A QUERY DE INSERÇÃO
        $query = "DELETE FROM clientes WHERE ID='$numID'";

        //VERIFICANDO SE A QUERY FOI 
        if(mysqli_query($connect, $query)){
            $_SESSION['msg'] = "Delete Concluido!";
            header("LOCATION:   ../index.php?");
        }else{
            $_SESSION['msg'] = "Erro ao Deletar!";
            header("LOCAT ION: ../index.php?");
        }
    }
?>