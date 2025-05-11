<?php
    require_once 'ClassesPessoa.php';
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;

        public function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }

        public function __construct($no, $id, $se, $lo) {
            parent::__construct($no, $id, $se);
            $this->setLogin($lo);
            $this->setTotAssistido(0);
        }

        public function getLogin() {
            return $this->login;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }

        public function setLogin($login) {
            $this->login = $login;
        }
        public function setTotAssistido($totAs) {
            $this->totAssistido = $totAs;
        }
    }
?>