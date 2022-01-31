algoritmo "semnome"
// Função :
// Autor :
// Data : 26/10/2021
// Seção de Declarações 
var
v, v1, v2, v3, v4, v5, s, vd5, nv, vn, sp: inteiro
m: real
inicio
nv <-1
s <- 0
m <- 0
vd5 <- 0
vn <- 0
sp <- 0
   Para nv <- 1 ate 5 faca
   escreval("Digite o", nv, "° valor: ")
   leia (v)
    nv <- nv+1
    s <- s+v
    m <- s/5
     Se (v%5=0) entao
        vd5 <- vd5+1
     FimSe
     Se (v=0) entao
        vn <- vn+1
     FimSe
     Se (V%2=0) entao
     sp <- sp+1
     FimSe
   FimPara

 Escreval ("A soma entre os valores é: ", s)
 Escreval ("A media entre os valores é: ", m)
 Escreval ("Valores divisiveis por 5: ", vd5)
 Escreval ("Valores nulos: ", vn)
 Escreval ("A Soma dos valores pares é: ", sp)
// Seção de Comandos 
fimalgoritmo
