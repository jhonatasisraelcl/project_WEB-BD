<!DOCTYPE html>
<html>
    <head>
        <?php include 'php/requires/head.php'; ?>
    </head>
    <body>
        <?php include "php/requires/menu.php";?>
        <p>Total: R$ 
		<input type="text" value="0" readonly="true" id="valorfinal"></p>
        <div class="container">    
            <div class="row">
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/Wesley Safadao.jpg" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminui('valores'); CD1d()">
                            <input type="text" value="0" id="valores" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores'); CD1a()">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/Ed Sheeran.png" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminue('valores2'); CD2d()">
                            <input type="text" value="0" id="valores2" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores2'); CD2a()">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/Niall.jpg" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminue('valores3'); CD3d()">
                            <input type="text" value="0" id="valores3" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores3'); CD1a()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">    
            <div class="row">
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/taylor Swift.jpg" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminue('valores4'); CD4d(a)">
                            <input type="text" value="0" id="valores4" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores4'); CD4a(a)">
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/Wesley Safadao.jpg" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminue('valores5'); CD5d()">
                            <input type="text" value="0" id="valores5" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores5'); CD5a()">
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">50% DE DESCONTO</div>
                        <div class="panel-body">
                            <a href="artistas.php" >
                                <img src="img/Wesley Safadao.jpg" class="img-responsive" style="width:100%" alt="Image">
                            </a>
                            <div class="panel-footer">Enquanto durar o estoque!!!</div>
                            <input type="button" value="<" id="botaopink" onclick="diminue('valores6'); CD6d()">
                            <input type="text" value="0" id="valores6" readonly="true">
                            <input type="button" value=">" id="botaorosa" onclick="aumenta('valores6'); CD6a()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>	
        <footer class="container-fluid text-center">
            <p>Online Store Copyright</p>  
        </footer>
    </body>
</html>


