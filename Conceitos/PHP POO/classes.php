<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

    <?php
    require "./classe02/classe02.php";
    require "./classeconflitante/classe02conflitante.php";
    use classe02\Teste as Teste01;
    use classeconflitante\Teste as Teste02;
    #ou
    #use classe02\Teste;
    #ou
    #$aaa = #new\classe02\Teste();
    $aaa = new Teste01();
    $bbb = new Teste02();


    class Cristo{
        const ser = "Deus";
        public $nome;
        
        public function __construct($nome){
            $this->setNome($nome);
        }
        public function Batizar(){
            echo "Eu, ".$this->nome." te batizo em nome do Pai, do Filho e do Espirito Santo. Amem";
        }

        public function Perdoar(){
            echo "Eu te absolvo de teus pecados em nome do Pai, do Filho e do Espirito Santo. Amém";

        }
        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome = $name;
        }
        
    }
    #para exibir a constante,
    #self refere-se ao elemento
    #dentro do escopo.
    #parent refere-se ao
    #elemento que está
    #no escopo pai
    class Padre extends Cristo{
        public $nome;
        public function Absolver(){
            echo "Eu, em nome de Jesus que é ". self::ser." te batizo em nome do Pai, do Filho, e do Espirito Santo. Amém";
        }
    }
    $padre = new Padre("Pio");
    $padre->Perdoar();
    echo "<br>";
    $padre->Absolver();
    echo $padre->getNome();

    ?>
    <h1> oi</h1>
</body>
</html>