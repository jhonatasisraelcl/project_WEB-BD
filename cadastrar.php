<html>
    <head>
        <?php include 'php/requires/head.php'; ?>
    </head>
    <body>
        <?php include "php/requires/menu.php"; ?>
        <div class="formulario">  
            <div class="container">
                <form action="principal.php" method="post" enctype="multipart/form-data" name="cadastro" >
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" class="form-control" id="foto"  name="pfoto">
                    </div>
                    <div class="form-group">
                        <label for="foto">Múica:</label>
                        <input type="file" class="form-control" id="musica"  name="pmusica">
                    </div>
                    <div class="form-group">
                        <label for="nomeMusica">Nome da Música:</label>
                        <input type="text" class="form-control" id="nomeMusica" placeholder="Nome da Música" name="nomeMusica">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nomeCantor" placeholder="Nome do Cantor" name="cantor">
                    </div>
                     <div class="form-group">
                        <label for="album">Album:</label>
                        <input type="text" class="form-control" id="album" placeholder="Nome do album" name="album">
                    </div>
                   
                    <div class="form-group">
                        <label for="tamanho">Duração:</label>
                        <input type="text" class="form-control" id="duracao" placeholder="Duração" name="duracao">
                    </div>
                    <button type="submit" class="btn btn-default" id="cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>
    </body>
</html>