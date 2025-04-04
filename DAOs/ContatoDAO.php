<?php
    class ContatoDAO {
        public function salvar($contato, $conn) {

            try {
                $sql = "INSERT INTO Contatos (nome, telefone)
                VALUES (?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bindValue(1, $contato->getNome());
                $stmt->bindValue(2, $contato->getTelefone());
                $stmt->execute();

                $id = $conn->lastInsertId();
                $contato->setId($id);
                
                return $contato;
            } catch (Exception $erro) {
                throw $erro;
            }

        }
    }
?>