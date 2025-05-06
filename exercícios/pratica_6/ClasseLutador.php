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
            echo "<p>----------------------------------------</p>";
            echo "<p>Lutador: {$this->getNome()}</p>";
            echo "<p>Origem: {$this->getNacionalidade()}</p>";
            echo "<p>Idade: {$this->getIdade()} anos.</p>";
            echo "<p>Altura: {$this->getAltura()}m</p>";
            echo "<p>Peso: {$this->getPeso()}kg</p>";
            echo "<p>Ganhou: {$this->getVitorias()} vezes</p>";
            echo "<p>Perdeu: {$this->getDerrotas()} vezes</p>";
            echo "<p>Empatou {$this->getEmpates()} vezes</p>";
        }
        public function status() {
            echo "<p>----------------------------------------</p>";
            echo "<p>{$this->getNome()}</p>";
            echo "<p>É peso {$this->getCategoria()}</p>";
            echo "<p>{$this->getVitorias()} vitória(s).</p>";
            echo "<p>{$this->getDerrotas()} derrota(s).</p>";
            echo "<p>{$this->getEmpates()} empate(s).</p>";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
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
            $this->setCategoria();
        }
        public function setCategoria() {
            if ($this->getPeso() <= 52.2) {
                $this->categoria = "Inválido";
            }elseif ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
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