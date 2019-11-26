<?php
    include "php/funcoes/conectar.php";
        
    $cantor = "";
    $nomeMusica = "";
    $album = "";
    $duracao="";
    $imagem = "";
    $nome_imagem = "";
    
    // codigo da foto do album
    if (!empty($_FILES["pfoto"])) {
        $foto = $_FILES["pfoto"];
        // Largura máxima em pixels
        $largura = 500000;
        // Altura máxima em pixels
        $altura = 500000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000000000000;
        $error = array();
        // Verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])) {
            $error[1] = "Isso não é uma imagem.";
        }
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($foto["tmp_name"]);
        // Verifica se a largura da imagem é maior que a largura permitida
        if ($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar " .
            $largura . " pixels"; 
        }
        // Verifica se a altura da imagem é maior que a altura permitida
        if ($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar " .
            $altura . " pixels";
        }
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if ($foto["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " .
            $tamanho . " bytes";
        }
        // Se não houver nenhum erro
        if (count($error) == 0) {
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["tmp_name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = $foto["name"]; // md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "../img" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        } else {
            print_r($error);
        }
    } else {
        echo 'imagem nao encontrada';
    }

    // codigo da musica de demosntração
    if (!empty($_FILES["pmusica"])) {
        $musica = $_FILES["pmusica"];
        $error = array();
        // Verifica se o arquivo é uma musica
        if (count($error) == 0) {
            // Pega extensão da musica
            preg_match("/\.(mp3){1}$/i", $musica["tmp_name"], $ext);
            // Gera um nome único para a musica
            $nomeMusica = $musica["name"]; // md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a musica
                $caminhoMusica = "../musicas/" . $nomeMusica;
            // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto["tmp_name"], $caminhoMusica);
        } else {
            print_r($error);
        }
    } else {
        echo 'musica nao encontrada';
    }

    //if (isset($_POST)) {
    //Opa! os dados foram enviados
    //dados do cantor
    if (isset($_POST["cantor"])) {
        if (!empty($_POST["cantor"])) {
            $cantor = $_POST["cantor"];
        }
    } else {
        echo "Preencha o nome do cantor!";
    }
    if (isset($_POST)) {
        //Opa! os dados foram enviados
        if (isset($_POST["nomeMusica"])) {
            if (!empty($_POST["nomeMusica"])) {
                $nomeMusica = $_POST["nomeMusica"];
            }
        } else {
            echo "Preencha o nome da musica de exemplo!";
        }

        if (isset($_POST["album"])) {
            if (!empty($_POST["album"])) {
                $album = $_POST["album"];
            }
        }
    } else {
        echo "Preencha o nome do album!";
    }

    if (isset($_POST["duracao"])) {
        if (!empty($_POST["duracao"])) {
            $duracao = $_POST["duracao"];
        } else {
            echo "A duração do album está vazia";
        }
    }
    $sql = " INSERT INTO `loja`.`cd` (`album`,`duracao`,`imagem`,`nomeMusica`,`cantor`)
         VALUES('$album',$duracao,'$nome_imagem','$musica','$cantor');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: telaPerfil.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; 
    }
?>