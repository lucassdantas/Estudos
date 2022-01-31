algoritmo "semnome"
// Função :
// Autor :
// Data : 26/10/2021
// Seção de Declarações 
var
a1, a2, a3, f: inteiro

procedimento Soma (var n1, n2: inteiro)
var n3, f: inteiro
inicio
f <- 0

Para f <- 0 ate 5 faca
        n3 <- n1 + n2
        n1 <- n2
        n2 <- n3
        escreval(n3, ", ")
fimpara
fimprocedimento
inicio
 f <- 0
a1 <- 0
a2 <- 1
escreval (" 0,")
escreval (" 1,")

     Soma (a1, a2)

// Seção de Comandos 
fimalgoritmo
