<?php

    class Contato implements JsonSerializable {
        private $id;
        private $nome;
        private $telefone;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function jsonSerialize() {
            return [
                "id" => $this->id,
                "nome" => $this->nome,
                "telefone" => $this->telefone
            ];
        }

}