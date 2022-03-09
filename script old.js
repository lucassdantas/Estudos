

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

let SecondMaker = {

    //Atributes ==========

    Inspiracao:[0],
    Pause:[0],
    Expiracao:[0],


    //Methods ============

    Contador(Value) {
        let ValueList = [Value]      
        let Count = ValueList[0]    
        for (i = 0; i <= Count; i++){
            ValueList[i] = i
        }     
        return ValueList   
    },

    //Getters and Setters  -------

    /*setInspiracao(){       
        let Selected = Exercicios.Selector()
        let InspValue = Selected.Inspiracao
        let PauseValue = Selected.Pause
        let ExpValue = Selected.Expiracao
        
    },*/
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
    }

}

//OUTRO OBJETO===================


let SecondSetter = {
    ValueGetterSetter(){       
        let Selected = Exercicios.Selector()
        let InspValue = Selected.Inspiracao
        let PauseValue = Selected.Pause
        let ExpValue = Selected.Expiracao
        //Setter
        SecondMaker.Inspiracao = SecondMaker.Contador(InspValue)
        SecondMaker.Pause = SecondMaker.Contador(PauseValue)
        SecondMaker.Expiracao = SecondMaker.Contador(ExpValue)
    },
}


//OUTRO OBJETO ===============

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

//OUTRO OBJETO ===============

let Timer = {
    //Deucerto, agora é ´so colocar um limite!!!
    
    InspTime(i){     
        
            function SecondChange(i) {
                let InspText = SecondsSelector.getInsp()
                let Changer = function () {
                    InspText.innerText = (String(SecondMaker.Inspiracao[i]))
                    i++
                    return i
                }
                let p = 0
                let Interval
                do{
                    if(Changer()<5){
                        Interval = setInterval(Changer, "1000")
                    }  else{                       
                        clearInterval(Interval)
                    }
                    p++
                } while(p>5)
                console.log(i)
                
            }
            SecondChange(i)
            console.log(i)
        
               
    }
}

//OUTRO OBJETO ===============

let App = {
    //Methods 

    LoadFunctions(){
        Exercicios.Selector()
        
        SecondSetter.ValueGetterSetter()

        SecondValueSetter.setInsp()
        
        SecondsSelector.setInsp()
        SecondsSelector.setPause()
        SecondsSelector.setExp()

    },
    Init(){
        
        if((Exercicios.Selector != Exercicios.Custom) && (Exercicios.Selector != undefined)) {
            Timer.InspTime(1)
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






