<?php
    Class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function cancelarMatricula() {
            $this->setMatricula(null);
        }

        public function __construct($n, $i, $s, $m, $c) {
            parent::__construct($n, $i, $s);
            $this->setMatricula($m);
            $this->setCurso($c);
        }

        public function getMatricula() {
            return $this->matricula;
        }
        public function getCurso() {
            return $this->curso;
        }

        public function setMatricula($m) {
            $this->matricula = $m;
        }
        public function setCurso($c) {
            $this->curso = $c;
        }
    }
?>