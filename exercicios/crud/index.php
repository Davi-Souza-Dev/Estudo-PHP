<?php
include_once 'includes/header.php';
session_start();
if (isset($_SESSION['msg'])) {
?>
    <script>
        window.addEventListener("load", () => {
            M.toast({
                html: "<?php echo $_SESSION['msg'];?>"
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
                while ($dados = mysqli_fetch_array($result)) :
                ?>
                    <tr>
                        <td><?php echo $dados['nome'] ?></td>
                        <td><?php echo $dados['sobrenome'] ?></td>
                        <td><?php echo $dados['email'] ?></td>
                        <td><?php echo $dados['idade'] ?></td>
                        <td><a href="" class="btn-floating lightgreen"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br />
        <a href="adicionar.php" class="waves-effect waves-light btn-small black"><i class=" large material-icons left">add</i>Novo Cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>