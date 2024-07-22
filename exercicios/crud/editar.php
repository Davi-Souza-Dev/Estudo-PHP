<?php
//CONEXâo
include_once 'phpActions/dbConnect.php';

if($_GET['id']){
    $id = mysqli_escape_string($connect,$_GET['id']); 
    $sql = "SELECT * FROM clientes WHERE ID= '$id'";
    $result = mysqli_query($connect,$sql);

    $dados = mysqli_fetch_array($result);
}
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h1 class="light">Editar Cliente</h1>
        <form action="phpActions/update.php" method="post">
        <!-- INPUT ESCONDIDO PARA QUARDAR O VALOR DO ID ESCOLHIDO -->
        <input type="hidden" name="numID" id="numID" value="<?php echo $dados['ID'];?>"> 
            <div class="input-field col s12">
                <input type="text" name="txtNome" id="txtNome" value="<?php echo $dados['nome'];?>">
                <label for="txtNome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="txtSobrenome" id="txtSobrenome" value="<?php echo $dados['sobrenome'];?>">
                <label for="txtSobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="txtEmail" id="txtEmail" value="<?php echo $dados['email'];?>">
                <label for="txtEmail">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numIdade" id="numIdade" value="<?php echo $dados['idade'];?>">
                <label for="numIdade">Idade</label>
            </div>
            <button type="submit" class="btn" name="btnAtualizar" id="btnAtualizar">Atualizar</button>            
            <a href="index.php" type="submit" class="red btn">Cancelar</a>

        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>