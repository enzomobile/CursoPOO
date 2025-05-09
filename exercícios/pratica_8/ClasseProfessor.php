<?php 
    Class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function receberAumento($aumento) {
            $this->setSalario($this->getSalario() + $aumento);
        }

        public function __construct($n, $i, $s, $e, $sa) {
            parent::__construct($n, $i, $s);
            $this->setEspecialidade($e);
            $this->setSalario($sa);
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function getSalario() {
            return $this->salario;
        }

        public function setEspecialidade($e) {
            $this->especialidade = $e;
        }
        public function setSalario($sa) {
            $this->salario = $sa;
        }
    }
?>