<?php
    require_once 'ClassePessoaAbs.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMensalidade() {
            echo "<p>Pagando mensalidade de aluno(a) {$this->getNome()}</p>";
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