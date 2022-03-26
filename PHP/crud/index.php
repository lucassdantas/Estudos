<?php 
require_once "./includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">CLIENTES</h3>
        <Table class="striped">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>SOBRENOME</th>
                    <th>IDADE</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                <td>LUCAS</td>
                <td>DANTAS</td>
                <td>20</td>
                <td>@gmail.com</td>
                <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></td>
                <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></td>
            </tbody>
        </Table>
        <br>
        <a href="./adicionar.php" class="btn">ADICIONAR CLIENTE</a>
    </div>
</div>

        
<?php 
require_once "./includes/footer.php";
?>
