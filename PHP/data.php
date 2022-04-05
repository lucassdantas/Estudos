<?php
#letras d, m e y = numero e ano com 2 digitos
#letras D, M E Y = dia e mes escrito e ano com 4 digitos
#l é o dia da semana
#h = hora em formato de 12 h
#H = HORA EM FORMATO DE 24 H
# i = minutos
# s = segundos
# A = p.m ou a.m

#define o timezone
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/Y H:i");
?>