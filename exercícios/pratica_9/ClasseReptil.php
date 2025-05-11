<?php
    require_once 'ClasseAbsAnimal.php';
    class Reptil extends Animal {
        private $corEscama;

        public function __construct($p, $i, $m, $core) {
            parent::__construct($p, $i, $m);
            $this->setCorEscama($core);
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

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($core) {
            $this->corEscama = $core;
        }
    }
?>