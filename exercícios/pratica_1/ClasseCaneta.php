<?php 
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar() {
            if ($this->tampada==true) {
                echo "<p>Eita man, tá tampado :(</p>";
            } else {
                echo "<p>Estou rabiscando!!!</p>";
            }
        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;
        }
    }
?>