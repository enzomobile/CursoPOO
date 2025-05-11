<?php
    require_once 'ClasseAbsAnimal.php';
    class Reptil extends Animal {
        protected $corEscama;

        public function __construct($p, $i, $m, $core) {
            parent::__construct($p, $i, $m);
            $this->setCorEscama($core);
        }

        public function emitirSom() {
            echo "<p>Som de réptil</p>";
        }
        public function locomover() {
            echo "<p>Rastejando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo frutas/coisas</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($core) {
            $this->corEscama = $core;
        }
    }
?>