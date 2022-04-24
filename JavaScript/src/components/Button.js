function Button({texto, evento}){
    return <button onClick={evento}>{texto}</button>
}

export default Button