<?php
include_once 'includes/header.php';
session_start();
if (isset($_SESSION['msg'])) {
?>
    <script>
        window.addEventListener("load", () => {
            M.toast({
                html: "<?php echo $_SESSION['msg']; ?>"
            });
        });
    </script>
<?php
}
session_unset();
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h1 class="light">Clientes</h1>
        <table class="striped">
            <thead>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>
            </thead>
            <tbody>
                <?php
                //CONECTANDO AO BANCO DE DADOS
                include_once 'phpActions/dbConnect.php';
                //CRIANDO A QUERY
                $query = "SELECT * FROM clientes";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0){
                    while ($dados = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <td><?php echo $dados['nome'] ?></td>
                            <td><?php echo $dados['sobrenome'] ?></td>
                            <td><?php echo $dados['email'] ?></td>
                            <td><?php echo $dados['idade'] ?></td>
                            <td><a href="editar.php?id=<?php echo $dados['ID']; ?>" class="btn-floating lightgreen"><i class="material-icons">edit</i></a></td>
                            <td><a href="#modal<?php echo $dados['ID']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                            <!-- MODAL DE AVISO AO DELETAR -->
                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['ID']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>AVISO!</h4>
                                    <p>Realmente deseja excluir este cliente?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="phpActions/delete.php" method="post">
                                        <input type="hidden" name="numID" id="numID" value="<?php echo $dados['ID']; ?>">
                                        <button type="submit" class="red btn" name="btnDelete" id="btnDelete">DELETAR</button>
                                    </form>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </div>
                            </div>
                        </tr>
                        <!-- FINALIZA O LOOP -->
                <?php }}else{
                ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                    }    
                ?>
            </tbody>
        </table>
        <br />
        <a href="adicionar.php" class="waves-effect waves-light btn-small black"><i class=" large material-icons left">add</i>Novo Cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>