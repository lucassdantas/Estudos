import "./css/Header.module.css"
import Titulo from "./Titulo.js"
import Button from "./Button.js"

function Exibir(){
    console.log("oi")
}
function Header(){
   
    return(
        <div className="Header_background">
            
            <h1>HEADER</h1>
            <Titulo text="titulo"/>
            <Button evento={Exibir} texto="a"/>

        </div>
    )
}

export default Header