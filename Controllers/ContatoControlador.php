<?php
    require_once "./Conexao/Conexao.php";
    require_once "./Models/Contato.php";
    require_once "./DAOs/ContatoDAO.php";

    class ContatoControlador {
        public function salvar($contato) {

            try {

                //Abrir conexão
                $conexao = new Conexao();
                $conn = $conexao->getConexao();

                //Chamar o DAO e enviar parametros para o DAO
                $contatoDAO = new ContatoDAO();
                return $contatoDAO->salvar($contato, $conn);
                
            } catch (Excetion $erro) {
                throw $erro;
            }

        }
    }



?>