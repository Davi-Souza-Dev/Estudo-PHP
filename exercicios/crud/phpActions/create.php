<?php 
    //REQUIRE NO BANCO DE DADOS
    require_once 'dbConnect.php';
    session_start();
    //FUNCÃO PARA LIMPEZA DOS CAMPOS
    function limpar($input){
        global $connect;
        //LIMPANDO O SQL INJECTION
        $var = mysqli_escape_string($connect, $input);

        //LIMPANDO O XSS (CROSS SITE SCRIPITING)
        $var = htmlspecialchars($input);
        return $var;
    }
    if(isset($_POST['btnCadastrar'])){
        $txtNome = limpar($_POST['txtNome']);
        $txtSobrenome = limpar($_POST['txtSobrenome']);
        $txtEmail = limpar($_POST['txtEmail']);
        $numIdade = limpar($_POST['numIdade']);

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