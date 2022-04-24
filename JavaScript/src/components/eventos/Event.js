function Event({texto, evento}){
    return <button onClick={evento}>{texto}</button>
}

export default Event