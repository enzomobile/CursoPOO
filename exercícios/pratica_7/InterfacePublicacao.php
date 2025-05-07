<?php 
    interface Pulicacao {
        public function abrir();
        public function fechar();
        public function folhear();
        public function avancarPag();
        public function voltarPag();
    }
?>