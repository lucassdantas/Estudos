function NomeSet({setNomeF}){
    return(
        <div>
            <input 
            type="text"
            placeholder="Digite Seu Nome"
            onChange={e => setNomeF(e.target.value)}/>
        </div>
    )
}

export default NomeSet   