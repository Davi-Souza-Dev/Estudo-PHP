<?php
include_once 'includes/header.php';


?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h1 class="light">Novo Cliente</h1>
        <form action="phpActions/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="txtNome" id="txtNome">
                <label for="txtNome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="txtSobrenome" id="txtSobrenome">
                <label for="txtSobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="txtEmail" id="txtEmail">
                <label for="txtEmail">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numIdade" id="numIdade">
                <label for="numIdade">Idade</label>
            </div>
            <button type="submit" class="btn" name="btnCadastrar" id="btnCadastrar">Cadastrar</button>            
            <a href="index.php" type="submit" class="red btn">Cancelar</a>

        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>