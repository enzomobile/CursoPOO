<?php
    require_once "ClasseLutador.php";
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && $l1 <> $l2) {
                echo "A luta foi marcada.";
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                echo "<p>Isso não pode acontecer.</p>";
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function Lutar() {
            if ($this->getAprovada()) {
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        echo "<p>-------------------------------</p>";
                        echo "<p>O desafiado {$this->getDesafiado()->getNome()} ganhou!</p>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 1:
                        echo "<p>-------------------------------</p>";
                        echo "<p>O desafiante {$this->getDesafiante()->getNome()} ganhou!</p>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        break;
                    case 2:
                        echo "<p>-------------------------------</p>";
                        echo "<p>Houve um Empate!!!</p>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                }
            } else {
                echo "Essa luta não pode acontecer.";
            }
        }

        public function setDesafiado($l1) {
            $this->desafiado = $l1;
        }
        public function setDesafiante($l2) {
            $this->desafiante = $l2;
        }
        public function setRounds($r) {
            $this->rounds = $r;
        }
        public function setAprovada($a) {
            $this->aprovada = $a;
        }

        public function getDesafiado() {
            return $this->desafiado;
        }
        public function getDesafiante() {
            return $this->desafiante;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function getAprovada() {
            return $this->aprovada;
        }
    }
?>