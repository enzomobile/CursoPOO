<?php
    require_once 'ClasseAluno.php';
    final class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa renovada</p>";
        }
        public function pagarMensalidade() {
            echo "<p>{$this->getNome()} é bolsista, tendo {$this->getBolsa()}% de desconto no pagamento.</p>";
        }

        public function __construct($n, $i, $s, $m, $c, $b) {
            parent::__construct($n, $i, $s, $m, $c);
            $this->setBolsa($b);
        }

        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($b) {
            $this->bolsa = $b;
        }
    }
?>