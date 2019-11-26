<html>
    <head>
        <?php include 'php/requires/head.php';?>
    </head>
    <body>
        <?php include "php/requires/menu.php";?>
        <?php
            session_start();

            $foto = "";
            $nome = "";
            $cantor="";
    
            if (isset($_POST)) {
                if (isset($_POST["nome"])) {
                    if (!empty($_POST["nome"])) {
                        $nome = $_POST["nome"];
                    }
                } else {
                echo "Preencha o nome!";
                }
                if (isset($_POST["senha"])) {
                    if (!empty($_POST["senha"])) {
                        $senha = $_POST["senha"];
                    }
                } else {
                    echo "Preencha a senha";
                }

                require '../PHP/conexao.php';

                if (isset($sub)) {
                    $sql = "SELECT * from usuarios WHERE nick = '$nome' AND senha='$senha'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($sql = $result->fetch_assoc()) {
                        // echo "<tr><td>".$sql["senha"]."</td><td>".$sql["nome"]." ".$sql["nick"]."</td></tr>";
                        $nome = $sql["nome"];
                        $nick = $sql["nick"];
                        $cpf = $sql["cpf"];
                        $id = $sql["id"];
                        $foto = $sql["foto"];
                        $email = $sql["email"];
                        }
                        echo "</table>";
                    } else {
                        echo "<script>alert('Usuario nao encontrado!!!');</script> ";
                        header("Location: ../login.html");
                    }
                }
        }
        ?>