algoritmo "Primeiro projeto"
// Função :
// Autor :
// Data : 19/10/2021
// Seção de Declarações
var
s, c: caractere
idade, R, R2, cabelo: inteiro

inicio
R <- 0
R2 <- 0
      Repita
         Escreva("Qual o sexo? (M/F)")
         leia (S)
         Escreva("Qual é a idade? ")
         leia(Idade)
         escreval("qual a cor do cabelo? ")
         escreval("1 - preto")
         escreval("2 - loiro")
         escreval("3 - branco")
         escreval("4 - castanho")
         leia(cabelo)
         Se (S = "f") e (Idade > 18) e (Idade < 30) entao
            escolha(cabelo)
                  caso 3
                       R <- R+1
            fimescolha
         senao
              Se (S = "m") e (Idade > 18) e (Idade < 30)  entao
                 escolha(cabelo)
                  caso 3
                      R2 <- R2+1
                 fimescolha
              FimSe
         Fimse
         Escreva ("Deseja continuar? S/N ")
         leia (c)
      ate (c = "N")
      escreval("Voce escolheu", R, " mulheres entre 19 e 29 anos com cabelos brancos")
      escreval("você escolheu", R2, " homens entre 19 e 29 anos com cabelos brancos")
fimalgoritmo
