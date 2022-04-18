import logo from './logo.svg';
import './App.css';
import "./components/FraseCerta"
function App() {
  let name = "lucas"
  const uperName = name.toUpperCase()
  function soma(a, b){
    return a+b
  }
  const url = "img/nossa-senhora-das-graças.jpg/150"
  return (
    //É NECESSÁRIO USAR "className" para declarar classes pois "class" é
    //uma palavra reservada do react
    <div className="App">
      <header className="App-header">
        <h1> aprendendo react</h1>
        <p>aluno: {name}</p>
        <p>aluno: {uperName+" maiusculo"}</p>
        <p>nota: {(5+5)+" soma"}</p>
        <p>função: {soma(1, 2)}</p>
        <img src={url} alt="o endereço deve ficar entre chaves se as aspas estiverem na varaivel"/>
        <img src={logo} className="App-logo" alt="logo" />
        <FraseCerta/>
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a> 
      </header>
    </div>
  );
}

export default App;
