<?php
    require_once "InterfaceController.php";
    class Controlador implements Controller{
        private $volume;
        private $ligado;
        private $tocando;

        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar() {
            $this->setLigado(false);
        }
        public function volumeUp($a) {
            if ($this->getLigado()){
                if ($this->getVolume() >= 100) {
                    echo "<p>Não dá para aumentar acima do limite.</p>";
                } else {
                    $this->setVolume($this->getVolume() + 1 * $a);
                }
            } else {
                echo "<p>Nem tá ligado irmão.</p>";
            }
        }
        public function volumeDown($b) {
            if ($this->getLigado()) {
                if ($this->getVolume() <= 0) {
                    echo "<p>Não dá para diminuir o volume abaixo de 0.</p>";
                } else {
                    $this->setVolume($this->getVolume() - 1 * $b);
                }
            } else {
                echo "<p>Nem tá ligado irmão.</p>";
            }
        }
        public function abrirMenu() {
            echo "<p>A tela tá ligada? " . ($this->getLigado()?"SIM":"NÃO") . "</p>";
            echo "<p>Está tocando? " . ($this->getTocando()?"SIM":"NÃO") . "</p>";
            echo "<p>Volume: {$this->getVolume()} ";
            for ($i=0;$i<$this->getVolume();$i += 10) {
                echo "|";
            }
            echo "</p>";
        }
        public function fecharMenu() {
            echo "<p>Fechando o menu...</p>";
        }
        public function Mudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            } elseif ($this->getLigado(false)) {
                echo "<p>Tá desligado, cara.</p>";
            } else {
                echo "<p>Já tá mudo, cara.</p>";
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }

        public function __construct()
        {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function getVolume() {
            return $this->volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setVolume($v) {
            $this->volume = $v;
        }
        private function setLigado($l) {
            $this->ligado = $l;
        }
        private function setTocando($t) {
            $this->tocando = $t;
        }
    };
?>