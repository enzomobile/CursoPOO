<?php 
    class Caneta {
        public $cor;
        public $modelo;
        public $tampada;
        protected $ponta;
        protected $carga;

        public function Rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Tá tampado :(</p>";
            } else {
                echo "<p>Rabisquei!!!</p>";
            }
        }

        public function Tampar() {
            $this->tampada = true;
        }

        public function Destampar() {
            $this->tampada = false;
        }
    }
?>