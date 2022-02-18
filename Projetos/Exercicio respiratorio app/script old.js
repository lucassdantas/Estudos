

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

let Preenchedor = {

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


    //Getters and Setters 

    setInspiracao(nContado){       
        let nContadoV = nContado.getInspValue()
        let inspValueF = this.Contador(nContadoV)
        this.Inspiracao = inspValueF
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
    }

}

//OUTRO OBJETO===================

/*
let valueSetter = {
    InspValue: ValueGetter.Inspvalue,
    ExpValue: ValueGetter.ExpValue,
    Pausevalue: ValueGetter.PauseValue,
}
*/

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
       let Select = document.querySelector("#SelectExerc")
       let SelectV 
       switch (Select) {
           case 1:
               SelectV = this.Exercicio01
               break;

            case "custom":
                SelectV = this.Custom
                break;
       
           default:
               SelectV = this.Default
               break;
       }
        return SelectV

    }
}


//OUTRA COISA ==============
ValueGetter.setExpValueF(2, 5)
Preenchedor.setExpiracao(ValueGetter)
console.log(Preenchedor.Expiracao)



/* let ExpiracaoV = 2 //document.querySelector("")
let Repeticao = [2] document.querySelector("")
let Inspiracao = [5]
let Pause = [5]
let Expiracao = [ExpiracaoV + Pause] */
/*
for (let i = 0; i <= Repeticao; i++) {
 

    } 

    
let Contador = function (Value) {
        let Count = Value[0]    
        for (i = 0; i <= Count; i++){
            Value[i] = i
        }     
        return Value   
} 

//let x = [5]*/ 