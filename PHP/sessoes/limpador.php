<?php

session_start(); #inicia a sessão
session_unset(); #limpa a sessão
session_destroy(); #destroi a sessão >
#ao tentar entrar nas páginas que possuiam
#a sessão, não conseguiremos acessar pois
#a sessão foi destruida