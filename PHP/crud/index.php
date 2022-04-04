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
                    <td><a href="#modal<?php echo $dados["id"];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></td>

                     <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
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
