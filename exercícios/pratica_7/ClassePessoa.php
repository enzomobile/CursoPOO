<?php
    require_once 'ClasseLivro.php';
    Class Pessoa {
        
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver() {
            
        }

        public function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        public function setNome($n) {

        }
        public function setIdade($i) {

        }
        public function setSexo($s) {

        }

        public function getNome() {

        }
        public function getIdade() {

        }
        public function getSexo() {

        }
    }
?>