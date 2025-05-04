<?php 
    interface Controller {
        public function ligar();
        public function desligar();
        public function volumeUp($a);
        public function volumeDown($b);
        public function abrirMenu();
        public function fecharMenu();
        public function Mudo();
        public function desligarMudo();
        public function play();
        public function pause();
    };
?>