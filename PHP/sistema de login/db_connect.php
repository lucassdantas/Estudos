<?php
 #endereo do servidr
$servername = "localhost";
#nome de usuario
$username = "admin"; 
$password = "admin";
$db_name = "usuaris";

#conecta com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $db_name); 
if(mysqli_connect_error()){
    echo "falha na conexão:". mysqli_connect_error();

}