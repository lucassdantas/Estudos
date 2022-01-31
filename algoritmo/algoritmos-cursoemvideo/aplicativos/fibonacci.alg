algoritmo "semnome"
// Função :
// Autor :
// Data : 26/10/2021
// Seção de Declarações 
var
a1, a2, a3, f: inteiro

procedimento Soma (var f, n1, n2, n3: inteiro)
Para f <- 0 ate 15 faca
        n3 <- n1 + n2
        n1 <- n2
        n2 <- n3
        escreval(n3, ", ")

fimprocedimento
inicio
 f <- 0
a1 <- 0
a2 <- 1
escreval (" 0,")
escreval (" 1,")
Para f <- 0 ate 15 faca
     Soma (f, a1, a2, a3)
fimpara

// Seção de Comandos 
fimalgoritmo
