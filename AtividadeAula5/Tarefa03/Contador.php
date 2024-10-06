<?php

class Contador {
    // atributo inicializado
    private $valor;

    // construtor, ja define o valor para 0.
    public function __construct() {
        $this->valor = 0;
    }

    // zera o contador
    public function zerar() {
        $this->valor = 0;
    }

    // incrementa o valor do contador pela quantidade colocada no parametro.
    public function incrementar($valor) {
        $this->valor + $valor;
    }

    // retorna o valor do contador
    public function getValor() {
        return $this->valor;
    }
}

?>
