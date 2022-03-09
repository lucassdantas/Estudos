

//Pega os valores do exercicio custom
let CustomValueGetter = {

    //Atributes -----

    inspValue: 0,
    PauseValue: 0, 
    expV: 0,
    ExpValue: 0,

    
    //Getter and Setter ----

    setInspValue(){
        this.InspValue = document.querySelector("#InspValue")
    },
    getInspValue(){    
        return this.inspValue
    },


    setPauseValue(){
        this.PauseValue = document.querySelector("#PauseValue")
    },
    getPauseValue(){
        return this.PauseValue
    },


    setExpValue(){
        this.ExpValue = document.querySelector("#ExpValue")
    },
    getExpValue(){
        return this.ExpValue
    }


    /*
    setExpV(){
        this.expV = Exercicios.Selector.Expiracao
    },
    //(Talvez não use) getExpV(){},
    setExpValueF(ExpV, PauseV) {   
       this.ExpValue = ExpV + PauseV
    },
    */
}
//OUTRO OBJETO =============
//Este cria os arrays dos segundos 
//e pega os valores dos atributos
let SecondMaker = {

    //Atributes ==========

    Inspiracao:[0],
    Pause:[0],
    Expiracao:[0],


    //Methods ============

    Contador(Value) {
        //Cria um array de 0 até o número selecionado
        let ValueList = [Value]      
        let Count = ValueList[0]    
        for (i = 0; i <= Count; i++){
            ValueList[i] = i
        }     
        return ValueList   
    },


    //Getters and Setters  -------
    ValueGetterSetter(){       
        //Pega os valores do exercício selecionado,
        //joga na função que cria um array e
        //define o resultado como os valores do obj
        let Selected = Exercicios.Selector()
        let InspValue = Selected.Inspiracao
        let PauseValue = Selected.Pausa
        let ExpValue = Selected.Expiracao
        //Setter
        this.Inspiracao = this.Contador(InspValue)
        this.Pause = this.Contador(PauseValue)
        this.Expiracao = this.Contador(ExpValue)
    },

    getInspiracao(){
        return this.Inspiracao
    },

    setPause(nContado){
        let nContadoV = nContado.getPauseValue()
        let PauseValueF = this.Contador(nContadoV)
        this.Pause = PauseValueF
    },
    getPause(){
        return this.Pause
    },

    setExpiracao(nContado){
        let nContadoV = nContado.getExpValue()
        let ExpValueF = this.Contador(nContadoV)
        this.Expiracao = ExpValueF
    },
    getExpiracao(){
       return this.Expiracao
    },


}





//OUTRO OBJETO ===============
//Este define os atributos para os exercicios
let Exercicios = {

    //Atributes ----
    Default: {
        Inspiracao: 5,
        Pausa: 5,
        Expiracao: 20
    },

    Exercicio01: {
        Inspiracao: 10,
        Pausa: 10,
        Expiracao: 40
    },

    Custom: {
        Inspiracao: CustomValueGetter.InspValue,
        Pausa: CustomValueGetter.PauseValue,
        Expiracao: CustomValueGetter.ExpValue
    },


    //METHODS ----
    Selector(){
        //Verifica e retorna os valores do exercicio selecionado
        //pelo usuario
       let Select = document.querySelector("#SelectExerc").value
       let SelectV 
       switch (Select) {

            case "Padrão":
                SelectV = this.Default
                break;

            case "Custom":
                SelectV = this.Custom
                break;
           
            case "1":
                SelectV = this.Exercicio01
                break;    

           default:
               SelectV = undefined
               break;
       }
      
        return SelectV

    },

    SelectRepeat(){
        //Verifica e retorna os valores da repetição
        //do exercicio selecionado pelo usuário
        let Selected = this.Selector()
        let RepeatNumber
        switch (Selected) {
            case this.Default:
                RepeatNumber = 4
                break;

            case this.Custom:
                RepeatNumber = document.querySelector("#RepeatNumber").value

            default:
                
                break;
        }
        
        return RepeatNumber
    },

    //Getters ---
    getInspValue(){
        return this.Selector().Inspiracao
    },
    getPauseValue(){
        return this.Selector().Pause
    },
    getExpValue(){
        return this.Selector().Expiracao
    }
}

//OUTRO OBJETO ===============
//Seleciona os textos de inspiracao, expiracao e pausa
let SecondsSelector = {
    Inspiracao: [0],
    Pause: [0],
    Expiracao: [0],
    
    //Methods ------


    //Getters and Setters -----
    setInsp(){
       let Insp = document.querySelector("#InspText")
       this.Inspiracao = Insp
    },
    getInsp(){
        return this.Inspiracao
     },

    setPause(){
        let Pause = document.querySelector("#PauseText")
        this.Pause = Pause
     },
     getPause(){
        
        return this.Pause
        
     },

     setExp(){
        let Exp = document.querySelector("#ExpText")
        this.Expiracao = Exp
     },
     getExp(){
        return this.Expiracao
     }
}



//OUTRO OBJETO ===============
/*
let SecondValueSetter = {
    setInsp(){
        let Insp = SecondsSelector.getInsp()
        SecondMaker.Inspiracao
    },
    setPause(){
        let Pause = SecondsSelector.getPause()
        SecondMaker.Contador(Pause)
      },
    setExp(){
        let Exp = SecondsSelector.getExp()
        SecondMaker.Contador(Exp)
    }
      
}
*/


//OUTRO OBJETO ===============
//Esse substitui os valores dos segundos pelos
//selecionados anteriormente
//Ainda falta fazer uma contagem regressiva
//e fazer o numero iniciar com 5 e ir até 1
//também falta fazer isso com todos os valores
//adicionar um botão de " pause" 
//adicionar um botão de criar próprio exercício
let Timer = {   
    InspTime(t){          
        let InspText = SecondsSelector.getInsp()
        let Changer = function () {           
            InspText.innerText = (String(SecondMaker.Inspiracao[t]))
            if(t > Exercicios.Selector().Inspiracao){
                clearInterval(Interval)
                InspText.innerText = "0 S"
            }
            t++
        }
        let Interval = setInterval(Changer, "1000") 
        

              
    },
    HoldTime(t){
        let PauseText = SecondsSelector.getPause()
        let Changer = function () {           
            PauseText.innerText = (String(SecondMaker.Pause[t]))
            if(t > Exercicios.Selector().Pausa){
                clearInterval(Interval)
                PauseText.innerText = "0 S"
            }
            t++  
        }
        let Interval = setInterval(Changer, "1000") 
    },
    ExpireTime(t){
        let ExpireText = SecondsSelector.getExp()
        let Changer = function () {           
            ExpireText.innerText = (String(SecondMaker.Expiracao[t]))
            if(t > Exercicios.Selector().Expiracao){
                clearInterval(Interval)
                ExpireText.innerText = "0 S"
            }
            t++  
        }
        let Interval = setInterval(Changer, "1000")
    }
}
    

//OUTRO OBJETO ===============

let App = {
    //Methods 
    //Carrega as funções necessárias para rodar o app
    LoadFunctions(){
        
        //Verifica o exercicio seleconado
        Exercicios.Selector()
        //Verifica a repetiçao selecionada
        Exercicios.SelectRepeat()

        //Pega os valores dos segundos e cria arrays
        SecondMaker.ValueGetterSetter()

        //Selecionam os textos a serem modificados
        SecondsSelector.setInsp()
        SecondsSelector.setExp()
        SecondsSelector.setPause()



    },
    //Inicia a aplicação
    Init(){
        
        if((Exercicios.Selector != Exercicios.Custom) && (Exercicios.Selector != undefined)) {
            Timer.InspTime(1)
            Timer.HoldTime(1) 
            Timer.ExpireTime(1)
        } else if(Exercicios.Selector = Exercicios.Custom) {
            //colocar valores para exercício custom

        } else {
            //escrever aviso pedindo para inserir valores
        }
    
    
    }
    
}
//OUTRA COISA ==============

let Start = document.querySelector("#ButtonInit")
App.LoadFunctions()
Start.addEventListener("click", App.Init)






