<?php 
    final class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            
        }

        public function __construct($n, $i, $s, $m, $c, $b) {
            parent::__construct($n, $i, $s, $m, $c);
            $this->setBolsa($b);
        }

        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($b) {
            $this->bolsa = $b;
        }
    }
?>