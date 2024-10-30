<?php

    class Porta {
        // incializando atributos da classe porta.
        public $aberta = false;
        public $cor;
        public $dimensaoX;
        public $dimensaoY;
        public $dimensaoZ;

        // metodo abre
        public function abre() {
            $this->aberta = true;
        }
        
        // metodo fecha
        public function fecha() {
            $this->aberta = false;
        }
        
        // metodo pinta q define a cor da porta.
        public function pinta($cor) {
            $this->cor = $cor;
        }
        
        // metodo esta aberta que retorna se a porta ja esta aberta.
        public function estaAberta() {
            return $this->aberta;
        }
    }
?>