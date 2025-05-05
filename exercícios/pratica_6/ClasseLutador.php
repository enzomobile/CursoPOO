<?php
    class Lutador {

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function apresentar() {

        }
        public function status() {

        }
        public function ganharLuta() {

        }
        public function perderLuta() {

        }
        public function empatarLuta() {

        }

        public function __construct($n, $na, $i, $a, $p, $v, $d, $e)
        {
            $this->setNome($n);
            $this->setNacionalidade($na);
            $this->setIdade($i);
            $this->setAltura($a);
            $this->setPeso($p);
            $this->setVitorias($v);
            $this->setDerrotas($d);
            $this->setEmpates($e);
        }

        public function getNome() {
            return $this->nome;
        }
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getCategoria() {
            return $this->categoria;
        }
        public function getVitorias() {
            return $this->vitorias;
        }
        public function getDerrotas() {
            return $this->derrotas;
        }
        public function getEmpates() {
            return $this->empates;
        }

        public function setNome($n) {
            $this->nome = $n;
        }
        public function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }
        public function setIdade($i) {
            $this->idade = $i;
        }
        public function setAltura($a) {
            $this->altura = $a;
        }
        public function setPeso($p) {
            $this->peso = $p;
        }
        public function setCategoria($c) {
            $this->categoria = $c;
        }
        public function setVitorias($v) {
            $this->vitorias = $v;
        }
        public function setDerrotas($d) {
            $this->derrotas = $d;
        }
        public function setEmpates($e) {
            $this->empates = $e;
        }
    }
?>