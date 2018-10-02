<?php

// classe
class GeraChave {
    // propriedades
    public $estrelas = array();
    public $numeros = array();

    // metodos
    
    // construtor
    public function __construct () {
        $this->estrelas = $this->gera(1,12,2);
        $this->numeros  = $this->gera(1,50,5);
    }

    private function gera($min, $max, $num) {
        $chave = array();
        while (sizeof($chave) < $num) {
            $novo = rand($min,$max);
            if (!in_array($novo,$chave)) {
                array_push($chave, $novo);
            }
        } 
        sort($chave);
        return $chave;
    }

    public function asJSON () {
        return json_encode($this);
    }
}


// instanciar um objeto de uma classe
// $chave = new GeraChave();

// --- TESTES ----
// echo $chave->asJSON();

// var_dump($chave);
// var_dump($chave->numeros);

// $chave->numeros[] = 100;

// var_dump($chave->numeros);

?>