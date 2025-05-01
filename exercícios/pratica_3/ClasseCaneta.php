<?php 

    class Caneta {
        public $modelo;
        public $cor;
        public $tampada;
        private $ponta;

        public function __construct($m, $c, $p, $t)
        {
            $this->setModelo($m);
            $this->setCor($c);
            $this->setPonta($p);
            $this->setTampa($t);
        }

        public function getModelo() {
            return $this->modelo;
        }
        public function setModelo($m) {
            $this->modelo = $m;
        }
        public function getCor() {
            return $this->cor;
        }
        public function setCor($c) {
            $this->cor = $c;
        }
        public function getPonta() {
            return $this->ponta;
        }
        public function setPonta($p) {
            $this->ponta = $p;
        }
        public function getTampada() {
            return $this->tampada;
        }
        public function setTampa($t) {
            if ($t == 1) {
                $this->tampada = true;
            } elseif ($t == 0) {
                $this->tampada = false;
            }
        }
        public function Rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Não to aberto :(</p>";
            } else {
                echo "<p>Rabiscado novamente</p>";
            }
        }
    }

?>