<?php 
require_once "db_connect.php";
require_once "includes/header.php";
if(isset($_GET["id"])){
    $id = mysqli_escape_string($connect, $_GET["id"]);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">EDITAR CLIENTE</h3>
        <form action="update.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados["nome"];?>">
                <label for="nome">NOME</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados["sobrenome"];?>">
                <label for="sobrenome">SOBRENOME</label>
            </div>
            <div class="input-field col s12">
                <input type="text" 
                name="email"
                id="email" value="<?php echo $dados["email"];?>">
                <label for="email">EMAIL</label>
            </div>
            <div class="input-field col s12">
                <input type="text" 
                name="idade"
                id="idade" value="<?php echo $dados["idade"];?>">
                <label for="idade">IDADE</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn red">ATUALIZAR</button>
            <a href="index.php" type="submit" class="btn green">LISTA DE CLIENTES</a>
        </form>
        
    </div>
</div>

        
<?php 
require_once "includes/footer.php";
?>

