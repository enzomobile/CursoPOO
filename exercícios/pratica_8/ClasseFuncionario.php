<?php 
    Class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function mudarTrabalho() {
            $this->setTrabalhando(!$this->getTrabalhando());
        }

        public function __construct($n, $i, $s, $st, $t) {
            parent::__construct($n, $i, $s);
            $this->setSetor($st);
            $this->setTrabalhando($t);
        }

        public function getSetor() {
            return $this->setor;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }

        public function setSetor($st) {
            $this->setor = $st;
        }
        public function setTrabalhando($t) {
            $this->trabalhando = $t;
        }
    }
?>