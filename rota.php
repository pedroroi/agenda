<?php
    require_once "Models/Contato.php";
    require_once "Controllers/ContatoControlador.php";

    $acao = $_GET["acao"];

    switch($acao) {
        case "salvarContato":

            //$nome = $_POST["nome"];
            //$telefone = $_POST["telefone"];
            $json = file_get_contents("php://input");

            $contatoDTO = json_decode($json);
            
            $nome = $contatoDTO->nome;
            $telefone = $contatoDTO->telefone;

            $contato = new Contato();
            
            $contato->setNome($nome);
            $contato->setTelefone($telefone);

            $contatoControlador = new ContatoControlador;
            try {
                $contato = $contatoControlador->salvar($contato);
                echo json_encode($contato);
                //header("Location: ./View/formCadastrarContato.html");
            } catch(Exception $erro) {
                echo "Erro ao cadastrar contato!";
            }
            
    }

?>