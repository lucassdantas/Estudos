import Proptypes from "prop-types"
function Lista({item, ano}){
    return(
        <>
            <ul>
                <li>{item}</li>
                <li>{ano}</li>
            </ul>
        </>
        
    )
}
console.log({Proptypes})
Lista.propTypes = {
    item: Proptypes.string.isRequired,
    ano: Proptypes.number,
}

export default Lista