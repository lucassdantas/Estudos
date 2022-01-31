algoritmo "semnome"                                                                                                                                           !

// Função :
// Autor :
// Data : 27/10/2021
// Seção de Declarações
var
nota: vetor [1..5] de caractere
aluno: vetor [1..5] de caractere
resposta: vetor [1..5] de caractere
media: vetor [1..3] de inteiro
c, j, q, Qaluno, mediaA: inteiro
inicio
para q <- 1 ate 5 faca
   escreval ("digite a resposta da", q, "° questão")
   leia (nota[q])
   limpatela
fimpara
para j <- 1 ate 3 faca
   escreval("Digite seu nome ")
   leia(aluno [j])
   para c <- 1 ate 5 faca
      escreval("Escreva as respostas: ")
      Escreval(c, "° questão: ")
      leia(resposta[c])
      se (resposta[c] = nota[c])entao
      media[j] <- media[j ]+2
      fimse
      limpatela
   fimpara
fimpara
para q <- 1 ate 3 faca
     escreval("A nota do aluno ", aluno[q], " é: ", media[q])
     mediaA <- mediaA + media[q]
     Qaluno <- Qaluno +1
     
fimpara
Escreval("a media da turma foi", mediaA/Qaluno)
fimalgoritmo
