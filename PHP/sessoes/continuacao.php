<?php

#deve ter a session start
#para pegar as sessões criadas
#anteriormente
session_start();
echo $_SESSION["numero"]."<br>".$_SESSION["usuario"]."<br>".session_id();