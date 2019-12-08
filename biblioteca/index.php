<?php
session_start();

if(isset($_SESSION['usuarioLogin'])){
    header('location: principal.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
        <link href="bootstrap/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body  class="fondo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="validar.php" method="POST">
                        <br/><br><br/><br/>
                        <h1><p class="text-center">¡Bienvenido!</p></h1>
                        <br/><br/>
                        <div class="form-group text-center">
                            <label for="usuario">Nombre de Usuario</label>
                            <input type="text" name="usuario" id="usuario" value="" placeholder="UserName" class="form-control"/>
                        </div>
                        <br/>
                        <div class="form-group text-center">
                            <label for=contrasenna>Contraseña</label>
                            <input type="password" name="password" id="contrasenna" value="" placeholder="********" class="form-control"/>
                        </div>
                        <br/>
                        <div align="center"  class="form-group">
                            <input type="submit" name="login" id="login" value="Iniciar Sesión" class="btn btn-success">
                        </div>
                        
                        <span id="result"></span>

                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>