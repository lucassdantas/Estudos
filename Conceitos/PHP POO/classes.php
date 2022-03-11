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
    class Cristo{
        public $nome;
        
        public function __construct($nome){
            $this->setNome($nome);
        }
        public function Batizar(){
            echo "Eu, ".$this->nome." te batizo em nome do Pai, do Filho e do Espirito Santo. Amem";
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome = $name;
        }
        
    }
    $padre = new Cristo("Pio");

    echo $padre->getNome();
    
    ?>
    <h1> oi</h1>
</body>
</html>