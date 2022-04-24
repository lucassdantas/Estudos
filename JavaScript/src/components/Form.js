import {useState} from "react"
import Event from "./eventos/Event.js"
function Form(){
    function Enviou(e){
        e.preventDefault()
        console.log({name})
        console.log({password})
        return(
        <>
        <p>{name}</p>
        </>
        )
    }   
    function Evento(){
        console.log("evento do elemento pai ativado")
    }
  
    const [name, setName] = useState()
    const [password, setPassword] = useState()
    //o label for deve ser escrito como "htmlFor" pois "for" é 
    //um caractere resrvado
    return(
        <div>
            <form onSubmit={Enviou}>
                <label htmlFor="name">Nome</label> 
                
                <input
                type="text"
                id="name"
                name="name"
                value={name}
                onChange={e => setName(e.target.value)}
                />
                <input
                type="password"
                name="senha"
                id="senha"
                value={password}
                onChange={e => setPassword(e.target.value)}
                />
                <input type="submit" />
                <br></br>
                <Event evento={Evento} texto="oi"/>
                
            </form>
        
        </div>
    )
}

export default Form
