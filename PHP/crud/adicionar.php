<?php 
require_once "includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">NOVO CLIENTE</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">NOME</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">SOBRENOME</label>
            </div>
            <div class="input-field col s12">
                <input type="text" 
                name="email"
                id="email">
                <label for="email">EMAIL</label>
            </div>
            <div class="input-field col s12">
                <input type="number" 
                name="idade"
                id="idade">
                <label for="idade">IDADE</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn red">ENVIAR</button>
            <a href="index.php" type="submit" class="btn green">LISTA DE CLIENTES</a>
        </form>
        
    </div>
</div>

        
<?php 
require_once "includes/footer.php";
?>
