<?php

    class Imovel {

        // atributo cor inicializado.
        public $cor;

        public function pinta($cor) {
            $this->cor = $cor;
        }

        // verifica a quantidade de portas abertas no imovel.
        public function quantasPortasEstaoAbertas($portas) {
            $abertas = 0;
            foreach ($portas as $porta) {
                if ($porta->estaAberta()) {
                    $abertas++;
                }
            }
            return $abertas;
        }
    }
?>