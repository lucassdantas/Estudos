<?php


class Soar{
    public function Nota($nota){
        return $nota;
    }
}

class Tocar{
    public $nota;
    public $tecla;
    function __construct($tecla){
        $this->nota = new Soar();
        $this->tecla = $tecla;
    }

    public function Select_nota(){
        if ($this->tecla == 1) {
            echo $this->nota->Nota("dó");
            # code...
        }
    }

}

$pianista = new Tocar(1);
$pianista->Select_nota();