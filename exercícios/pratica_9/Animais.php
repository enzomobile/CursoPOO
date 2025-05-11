<?php 
    require_once 'ClasseAbsAnimal.php';
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
    }
?>