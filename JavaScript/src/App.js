import logo from './logo.svg';
import './App.css';
import FraseCerta from "./components/FraseCerta.js"
import Props from "./components/Props.js"
import Lista from "./components/Lista.js"
import Form from "./components/Form.js"
function App() {
   return (
    //É NECESSÁRIO USAR "className" para declarar classes pois "class" é
    //uma palavra reservada do react
    <div className="App">
      <Form/>
    </div>
  );
}

export default App;
