<?php
    require_once 'InterfacePublicacao.php';
    Class Livro {

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {

        }
        
        public function __construct($ti, $au, $t, $p, $ab, $le) {
            $this->setTitulo($ti);
            $this->setAutor($au);
            $this->setTotPaginas($t);
            $this->setPagAtual($p);
            $this->setAberto($ab);
            $this->setLeitor($le);
        }

        public function setTitulo($ti) {
            $this->titulo = $ti;
        }
        public function setAutor($au) {
            $this->autor = $au;
        }
        public function setTotPaginas($t) {
            $this->totPaginas = $t;
        }
        public function setPagAtual($p) {
            $this->pagAtual = $p;
        }
        public function setAberto($ab) {
            $this->aberto = $ab;
        }
        public function setLeitor($le) {
            $this->leitor = $le;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }
    }
?>