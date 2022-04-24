import Header from "./components/Header.js"
function App() {
   return (
    //É NECESSÁRIO USAR "className" para declarar classes pois "class" é
    //uma palavra reservada do react
    <div className="App">
      <Header/>
    </div>
  );
}

export default App;
