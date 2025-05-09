<?php
    require_once 'ClassePessoa.php';
    require_once 'InterfacePublicacao.php';
    Class Livro implements Publicacao{

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "<p>Livro: {$this->getTitulo()}, escrito por: {$this->getAutor()}</p>";
            echo "<p>Páginas: {$this->getTotPaginas()}</p>";
            echo "<p>Sendo lido por {$this->leitor->getNome()}</p>";
            echo "<p>--------------------------------------</p>";
        }

        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear($p) {
            if ($p > $this->getTotPaginas()) {
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($p);
            }
        }
        public function avancarPag() {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        public function voltarPag() {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    
        public function __construct($ti, $au, $t, $le) {
            $this->setTitulo($ti);
            $this->setAutor($au);
            $this->setTotPaginas($t);
            $this->setPagAtual(0);
            $this->setAberto(false);
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