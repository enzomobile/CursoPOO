<?php
    require_once 'ClasseAbsAnimal.php';
    class Peixe extends Animal {
        private $corEscama;

        public function __construct($p, $i, $m, $core) {
            parent::__construct($p, $i, $m);
            $this->setCorEscama($core);
        }

        public function soltarBolha() {
            echo "<p>Soltou bolha</p>";
        }

        public function emitirSom() {
            echo "<p>Som de peixe</p>";
        }
        public function locomover() {
            echo "<p>Nadando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo Substâncias</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($core) {
            $this->corEscama = $core;
        }
    }
?>