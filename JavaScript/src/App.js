import Header from "./components/Header.js"
import {useState} from "react"
import NomeSet from "./components/NomeSet.js"
import NomeFinal from "./components/NomeFinal.js"
function App() {
  const [name, setName] = useState()
  return (
    //É NECESSÁRIO USAR "className" para declarar classes pois "class" é
    //uma palavra reservada do react
    <div className="App">
      <Header/>
      <h1>UseState</h1>
      <NomeSet setNomeF={setName}/>
      <NomeFinal Nome={name}/>
    </div>
  );
}

export default App;
