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
                    if(mysqli_num_rows($resultado) > 0):
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
                    <div id="modal<?php echo $dados["id"];?>" class="modal">
                        <div class="modal-content">
                        <h4>Aviso</h4>
                        <p>O cliente será deletado</p>
                        </div>
                        <div class="modal-footer">
                       
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados["id"];?>">
                            <button type="submit" name="btn-deletar" class="btn red">Quero deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

                        </form>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    else: ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>    
                    <?php
                    endif;
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
