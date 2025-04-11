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
                
            } catch (Exception $erro) {
                throw $erro;
            }

        }

        public function editar($contato) {
            try {
                //Abrir conexão
                $conexao = new Conexao();
                $conn = $conexao->getConexao();

                //Chamar o DAO e enviar parametros para o DAO
                $contatoDAO = new ContatoDAO();
                return $contatoDAO->editar($contato, $conn);
            } catch (Exception $erro) {
                throw $erro;
            }   
        }

        public function excluir($contato) {
            try {
                //Abrir conexão
                $conexao = new Conexao();
                $conn = $conexao->getConexao();

                //Chamar o DAO e enviar parametros para o DAO
                $contatoDAO = new ContatoDAO();
                return $contatoDAO->excluir($contato, $conn);
            } catch (Exception $erro) {
                throw $erro;
            }
        }

        public function buscarTodos() {
            
            try {
                //Abrir conexão
                $conexao = new Conexao();
                $conn = $conexao->getConexao();

                //Chamar o DAO e enviar parametros para o DAO
                $contatoDAO = new ContatoDAO();
                return $contatoDAO->buscarTodos($conn);
                
            } catch (Exception $erro) {
                throw $erro;
            }

        }
    }



?>