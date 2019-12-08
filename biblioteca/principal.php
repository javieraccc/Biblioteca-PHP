<?php
session_start();
if(!isset($_SESSION['usuarioLogin'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema Biblioteca</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    </head>
    <body>
        <div >
            <header>
                <?php include_once './base/header.php'; ?>
            </header> 
        </div>    
        
        <div class="container">
            <div class="row">
            <br><br><br><br>
                <div class="col-md-6 col-md-offset-3">
                    <div class="btn-group-lg" >
                        <br/><br/>                        
                        <div align='center'>
                            <input type="button" onclick="location.href='prestamo.php'" name="prestamo" id="prestamo" value="Préstamos" class="btn btn-success btn-block"/>
                        </div>
                        <br/>                        
                        <div align='center'>
                            <input type="button" onclick="location.href='reserva.php'" name="reserva" id="reserva" value="Reservas" class="btn btn-success btn-block"/>
                        </div>
                        <br/>                         
                        <div align='center'>
                            <input type="button" onclick="location.href='devolucion.php'" name="devolucion" id="devolucion" value="Devoluciones" class="btn btn-success btn-block"/>
                        </div>
                        <br/>                        
                        <div align='center'>
                            <input type="button" onclick="location.href='usuarios.php'" name="usuarios" id="usuarios" value="Usuarios Biblioteca" class="btn btn-success btn-block"/>
                        </div>
                        <br/>                        
                        <div align='center'>
                            <input type="button" onclick="location.href='libros.php'" name="libros" id="libros" value="Stock de Libros" class="btn btn-success btn-block"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>




