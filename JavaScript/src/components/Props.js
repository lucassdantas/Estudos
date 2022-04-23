import style from "./Props.module.css"
function PropFunction({title, subtitle}){
    return(
        <div>
            <h1 className={style.titulo_do_texto}>{title}</h1>
            <h2 className={style.FraseCerta}>{subtitle}</h2>
        </div>
    )
}
export default PropFunction