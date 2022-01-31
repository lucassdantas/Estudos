algoritmo "semnome"
// Função :
// Autor :
// Data : 27/10/2021
// Seção de Declarações 
var
matriz: vetor [1..4, 1..4] de inteiro
o, q, i: inteiro
sn: caractere

procedimento calculo (var a, b, c: inteiro): inteiro
var
d: caractere
inicio
para a <- 1 ate 4 faca
     para b <- 1 ate 4 faca
          escolha(c)
             caso 1
                escreva(matriz[a, b])

             caso 2
                 se (a = b) entao
                    escreva(matriz [a, b])
                 senao
                    escreva (" ")
                 fimse
              
              caso 3
                 se (a = b) entao
                    escreva(matriz [a, b])
                 senao
                    escreva (" ")
                 fimse
              caso 4
                 se (a = b) entao
                    escreva(matriz [a, b])
                 senao
                    escreva (" ")
                 fimse
              caso 5
                   d <- "n"
           fimescolha
     fimpara
     escreval()
fimpara
fimprocedimento

inicio
para q <- 1 ate 4 faca
     para i <- 1 ate 4 faca
          escreval("Digite um valor para a posição", q, i)
          leia (matriz[q, i])
     fimpara
fimpara
q <- 1
i <- 1
repita
      limpatela
      escreval("1 - mostrar matriz")
      escreval("2 - mostrar matriz principal")
      escreval("3 - mostrar triangulo superior")
      escreval("4 - mostrar triangulo inferior")
      escreval("5 - sair")
      leia(o)
      calculo (q, i, o, sn)
      escreval("quer continuar? (s/n)")
      leia(sn)
ate (sn = "n") e (o = "5")
escreva("Você fechou o programa")
fimalgoritmo
