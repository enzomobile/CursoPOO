<?php
    require_once 'ClasseAbsAnimal.php';
    Class Mamifero extends Animal {
        protected $corPelo;

        public function __construct($p, $i, $m, $corp) {
            parent::__construct($p, $i, $m);
            $this->setCorPelo($corp);
        }

        public function emitirSom() {
            echo "<p>Som de mamífero</p>";
        }
        public function locomover() {
            echo "<p>Correndo</p>";
        }
        public function alimentar() {
            echo "<p>Mamando</p>";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($corp) {
            $this->corPelo = $corp;
        }
    }
?>