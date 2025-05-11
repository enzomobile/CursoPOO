<?php
    require_once 'InterfaceVideo.php';
    class Video implements VideoInterface {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function play() {
            $this->setReproduzindo(true);
        }
        public function pause() {
            $this->setReproduzindo(false);
        }
        public function like() {
            $this->setCurtidas($this->getCurtidas() + 1);
        }

        public function __construct($ti) {
            $this->setTitulo($ti);
            $this->avaliacao = 1;
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function getViews() {
            return $this->views;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function setAvaliacao($avaliacao) {
            $media = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
            $this->avaliacao = $media;
        }
        public function setViews($views) {
            $this->views = $views;
        }
        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
    }
?>