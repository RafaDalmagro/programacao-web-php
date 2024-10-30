<?php

// edifício também é uma extensão de imóvel então assim como a casa também foi utilizado o termo "extends".
    class Edificio extends Imovel {

        // atributos e array de portas.
        public $totalDePortas = 0;
        public $totalDeAndares = 1;
        public $portas = [];

        // metodo que adiciona portas.
        public function adicionaPorta(Porta $porta) {
            $this->portas[] = $porta;
            $this->totalDePortas++;
        }

        public function adicionarAndar() {
            $this->totalDeAndares++;
        }

        public function totalDePortas() {
            return count($this->portas);
        }

        public function totalDeAndares() {
            return $this->totalDeAndares;
        }
    }
?>