<?php
#O REQUIRE PARA A APLICAÇÃO
#E DÁ UM ERRO FATAL
#CASO O ARQUIVO NÃO SEJA
#ENCONTRADO

#O INCLUDE NÃO NTERROMPE
#O SCRIPT E MOSTRA UM AVISO
#CASO NÃO ENCONTRE O SCRIPT


include_once "header.php";
require_once "header.php";
?>
<h1>oi</h1>
<p>
    o "once" faz com que<bR>
    o php verifique se o<br>
    objeto já foi incluido antes<br>
    e não repita a inclusão <br>
    caso já tneha sido inserido<br>
</p>

<?php 
include "footer.php";
?>