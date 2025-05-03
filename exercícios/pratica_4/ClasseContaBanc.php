<?php 
    Class ContaBanco {
        public $numConta;
        private $dono;
        private $saldo;
        protected $tipo;
        private $status;

        public function __construct()
        {
            $this->setSaldo(0.0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function Sacar($v) {
            if ($this->getStatus()) {
                if ($v > $this->getSaldo()) {
                    echo "<p>Não dá pra sacar mais do que você tem!</p>";
                } else {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$$v autorizado na conta de {$this->getDono()}</p>";
                }
            } else {
                echo "<p>Não dá pra sacar sem uma conta.</p>";
            }
        }
        public function Depositar($d) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $d);
                echo "<p>Depósito de $d na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Não da para depositar sem uma conta.</p>";
            }
        }
        public function AbrirConta($t) {
            if ($this->getStatus()) {
                echo "<p>Não se abre uma conta aberta.</p>";
            } else {
                $this->setTipo($t);
                $this->setStatus(true);
                if ($this->getTipo() == "Corrente") {
                    $this->setSaldo(50.0);
                } elseif ($this->getTipo() == "Poupança") {
                    $this->setSaldo(150.0);
                } else {
                    echo "<p>Tem algo errado ai.</p>";
                }
            }
        }
        public function FecharConta() {
            if ($this->getSaldo() > 0.0) {
                echo "<p>Ainda tem dinheiro na conta!</p>";
            } elseif ($this->getSaldo() < 0.0) {
                echo "<p>Não pode fechar conta com saldo devedor.</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta fechada com sucesso!</p>";
            }
        }
        public function PagarMensalidade() {
            $val = 0.0;
            if ($this->getTipo() == "Corrente") {
                $val = 12;
            } elseif ($this->getTipo() == "Poupança") {
                $val = 20;
            }
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $val) {
                    $this->setSaldo($this->getSaldo() - $val);
                    echo "<p>Mensalidade de {$this->getDono()} paga, custo de R$$val</p>";
                } else {
                    echo "<p>O saldo da conta não cobre o custo.</p>";
                }
            } else {
                echo "<p>Não da para cobrar a mensalidade.</p>";
            }
        }

        public function getNumConta() {
            return $this->numConta;
        }
        public function setNumConta($n) {
            $this->numConta = $n;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($do) {
            $this->dono = $do;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($s) {
            $this->saldo = $s;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($ti) {
            $this->tipo = $ti;
        }
        public function getStatus() {
            return $this->status;
        }
        public function setStatus($st) {
            $this->status = $st;
        }
    }
?>