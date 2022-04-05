<?php
#primeiro parametro é o nome e o segundo é o valor. o terceiro é a validade em segunds
setcookie("user", "rodrigo", time()+3600);

setcookie("email", "lucasdantasprogramador@gmail.com", time()+3600);

var_dump($_COOKIE);
echo "<br>";
echo $_COOKIE["email"];
?>