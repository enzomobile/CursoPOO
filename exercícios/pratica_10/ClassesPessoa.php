<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        protected function ganharExp($e) {
            $this->setExperiencia($this->getExperiencia() + $e);
        }

        public function __construct($no, $id, $se) {
            $this->setNome($no);
            $this->setIdade($id);
            $this->setSexo($se);
            $this->setExperiencia(0);
        }

        public function getNome() {
            return $this->nome;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function getExperiencia() {
            return $this->experiencia;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        public function setExperiencia($exp) {
            $this->experiencia = $exp;
        }
    }
?>