<!DOCTYPE html>
<html>
    <head>
        <?php include 'php/requires/head.php'; ?>
    </head>
    <body>
        <?php
            include "php/requires/menu.php";
            include "php/funcoes/conectar.php";
            
            $pesquisar = $_POST['pesquisar'];
            $result = "SELECT * FROM loja.cd WHERE cantor OR album  LIKE '%$pesquisar%'";
            $resultado = mysqli_query($conn, $result);
            
            while($rows = mysqli_fetch_array($resultado)){
                echo "Nome do cantor: ".$rows['cantor']." Album: ".$rows['album']."<br>";
	        }
        ?>
    </body>
</html>