<?php
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;

        public function __construct($p, $i, $m) {
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
        }

        abstract public function emitirSom();
        abstract public function locomover();
        abstract public function alimentar();

        public function getPeso() {
            return $this->peso;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getMembros() {
            return $this->membros;
        }
        
        public function setPeso($p) {
            $this->peso = $p;
        }
        public function setIdade($i) {
            $this->idade = $i;
        }
        public function setMembros($m) {
            $this->membros = $m;
        }
    }
?>