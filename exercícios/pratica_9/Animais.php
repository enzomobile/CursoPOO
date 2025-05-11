<?php
    require_once 'ClasseAve.php';
    require_once 'ClasseReptil.php';
    require_once 'ClassePeixe.php';
    require_once 'ClasseMamifero.php';

    Class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "<p>Usando bolsa</p>";
        }
        public function locomover() {
            echo "<p>Saltando</p>";
        }
    }

    Class Cachorro extends Mamifero {
        public function enterrarOsso() {
            echo "<p>Enterrando osso</p>";
        }
        public function abanarRabo() {
            echo "<p>Abanando o rabo</p>";
        }
        public function emitirSom() {
            echo "<p>Au Au Au</p>";
        }
    }

    Class Arara extends Ave {
        public function fazerNinho() {
            echo "<p>Fazendo ninho</p>";
        }
    }

    Class PeixeDourado extends Peixe {

    }

    Class Tartaruga extends Reptil {
        public function locomover() {
            echo "<p>Andando bem devagar</p>";
        }
    }

    Class Cobra extends Reptil {
        public function locomover() {
            echo "<p>Rastejando</p>";
        }
    }
?>