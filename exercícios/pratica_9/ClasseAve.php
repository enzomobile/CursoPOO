<?php
    require_once 'ClasseAbsAnimal.php';
    class Ave extends Animal {
        private $corPena;

        public function __construct($p, $i, $m, $corp) {
            parent::__construct($p, $i, $m);
            $this->setCorPena($corp);
        }

        public function emitirSom() {
            echo "<p>Som de ave</p>";
        }
        public function locomover() {
            echo "<p>Voando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo frutas</p>";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function setCorPena($corp) {
            $this->corPena = $corp;
        }
    }
?>