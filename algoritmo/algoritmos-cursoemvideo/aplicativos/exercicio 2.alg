algoritmo "semnome"
// Função :
// Autor :
// Data : 26/10/2021
// Seção de Declarações 
var
i, j, aux: inteiro
vet: vetor [1..4] de inteiro
inicio
  para i <- 1 ate 4 faca
     escreval("digite um valor ")
     leia(vet[i])
  fimpara
  
  para i <- 1 ate 3 faca
    para j <- i+1 ate 4 faca
      se   (vet[i]> vet[j]) entao
              aux <- vet[j]
           vet[j] <- vet[i]
           vet[i] <- aux
      fimse
    fimpara
  fimpara
  para i <- 1 ate 4 faca
   escreval(vet[i])
  fimpara
fimalgoritmo
