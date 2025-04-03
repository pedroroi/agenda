<?php
    require_once "Models/Contato.php";
    require_once "Controllers/ContatoControlador.php";

    $acao = $_GET["acao"];

    switch($acao) {
        case "salvarContato":

            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];

            $contato = new Contato();
            
            $contato->setNome($nome);
            $contato->setTelefone($telefone);

            $contatoControlador = new ContatoControlador;
            try {
                $contatoControlador->salvar($contato);
                header("Location: ./View/formCadastrarContato.html");
            } catch(Exception $erro) {
                echo "Erro ao cadastrar contato!";
            }
            
    }

?>