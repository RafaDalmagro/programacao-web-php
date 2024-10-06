<?php

// casa é uma extensão de imóvel então foi utilizado o termo "extends".
    class Casa extends Imovel {

        // array que armazena as portas.
        public $portas = [];

        public function __construct() {

            // Inicializando três portas
            $this->portas[] = new Porta();
            $this->portas[] = new Porta();
            $this->portas[] = new Porta();
        }

        // conta o total de portas
        public function totalDePortas() {
            return count($this->portas);
        }
    }
?>