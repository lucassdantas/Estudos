algoritmo "Primeiro projeto"
// Função :
// Autor :
// Data : 19/10/2021
// Seção de Declarações
var
s, aguarde, soma, n: inteiro

inicio
      aguarde <- 0
      soma <- 0
      escreval("você quer esperar quantos segundos?")
      leia(s)
      enquanto (aguarde <= s-1) faca
               Escreval("aguarde", s, "segundos")
               soma <- soma + 1
               s <- s-1
      fimenquanto
      escreval("se pssaram", soma, "segundos")
fimalgoritmo
