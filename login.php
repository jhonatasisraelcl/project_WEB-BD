<html>
    <head>
        <?php include 'php/requires/head.php'; ?>
    </head>
    <body>
       <?php include "php/requires/menu.php"; ?>
        <div >
            <form class="formulario"  action="telaPerfil.php" method="post">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" class="form-control" name="nome" placeholder="nick name">                                        
                </div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" class="form-control" name="senha" placeholder="senha">
                </div>
                <a href="php/funcoes/email.html"> esqueceu a senha?</a>
                <button type="submit" class="btn btn-default sub"  name="sub">LOGAR</button>
            </form>
        </div>
    </body>
</html>
