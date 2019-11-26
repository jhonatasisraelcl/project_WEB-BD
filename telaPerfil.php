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
        <form action="alterar.php">
            <img id="perfil" src ="../IMG/Usuarios/<?php echo $foto; ?>" />
            <table id="dados" >
                <tr>
                    <td><h5>Id:</h5></td>
                    <td><?php echo $id ?></td>
                </tr><tr>
                    <td><h5>nick Name:</h5></td>
                    <td><?php echo $nick ?></td>
                </tr><tr>
                    <td><h5>nome</h5></td>
                    <td><?php echo $nome ?></td>
                </tr><tr>
                    <td><h5>cpf</h5></td>
                    <td><?php echo $cpf ?></td>
                </tr><tr>
                    <td><h5>senha</h5></td>
                    <td><?php echo $senha ?></td>
                </tr><tr>
                    <td><h5>email</h5></td>
                    <td><?php echo $email ?></td>
                    <td> <button  type="submit" class="btn btn-default" name="alter" id="alter" value="Alterar dados">Alterar </button></td>
                </tr>
            </table>
        </form> 
    </body>
</html>