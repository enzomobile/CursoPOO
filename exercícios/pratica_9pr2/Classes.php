<?php
    abstract Class Animais {
        protected $peso;
        protected $idade;
        protected $membros;

        abstract public function emitirSom();

        public function __construct($p, $i, $m)
        {
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
        }

        public function getPeso() {
            return $this->peso;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getMembros() {
            return $this->membros;
        }

        public function setPeso($p) {
            $this->peso = $p;
        }
        public function setIdade($i) {
            $this->idade = $i;
        }
        public function setMembros($m) {
            $this->membros = $m;
        }
    }

    Class Mamifero extends Animais {
        protected $corPelo;
        public function emitirSom() {
            echo "<p>Som de Mamífero</p>";
        }

        public function __construct($p, $i, $m, $corp)
        {
            parent::__construct($p, $i, $m);
            $this->setCorPelo($corp);
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($corp) {
            $this->corPelo = $corp;
        }
    }

    Class Lobo extends Mamifero {
        public function emitirSom() {
            echo "<p>Auuuuuuuuuuu</p>";
        }
    }

    final Class Cachorro extends Mamifero {
        public function emitirSom() {
            echo "<p>Au!Au!Au!</p>";
        }

        public function reagirFrase($frase) {
            if ($frase == "Olá" || $frase == "Toma comida") {
                echo "<p>Abanar e latir</p>";
            } else {
                echo "<p>Rosnar</p>";
            }
        }
        public function reagirHora($hora) {
            if ($hora < 12) {
                echo "<p>Abanar</p>";
            } elseif ($hora >= 18) {
                echo "<p>Ignorar</p>";
            } else {
                echo "<p>Abanar e latir</p>";
            }
        }
        public function reagirDono($dono) {
            if ($dono) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Rosnar e latir</p>";
            }
        }
        public function reagirIdadePeso($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "<p>Abanar</p>";
                } else {
                    echo "<p>Latir</p>";
                }
            } else {
                if ($peso < 10) {
                    echo "<p>Rosnar</p>";
                } else {
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }
?>