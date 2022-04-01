<?php 
    require_once "db_connect.php";

    require_once "./includes/header.php";

    include_once "./includes/mensagem.php";

?>
 
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">CLIENTES</h3>
        <Table class="striped">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>SOBRENOME</th>
                    <th>EMAIL</th>
                    <th>IDADE</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($connect, $sql);
            while($dados = mysqli_fetch_array($resultado)):
           
           
            ?>
                <tr>
                    <td><?php echo $dados["nome"];?></td>
                    <td><?php echo $dados["sobrenome"];?></td>
                    <td><?php echo $dados["email"];?></td>
                    <td><?php echo $dados["idade"];?></td>
                    <td><a href="./editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></td>
                    <?php 
                    endwhile;
                    ?>
                </tr>
            </tbody>
        </Table>
        <br>
        <a href="./adicionar.php" class="btn">ADICIONAR CLIENTE</a>
    </div>
</div>

      
<?php 
require_once "./includes/footer.php";
?>
