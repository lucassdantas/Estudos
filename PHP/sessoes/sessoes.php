<?php
session_start();
#essas superglobais criam a sessão
#se eu entrar em outra página diretamente,
#as sessões não estarão craidas.
#primeiramente as sessões devem ser criadas
#então, primeiramente, o usuário terá
#que entrar na página que possui a criação
#de sessões
$_SESSION["numero"] = "um";
$_SESSION["usuario"] = "um";

