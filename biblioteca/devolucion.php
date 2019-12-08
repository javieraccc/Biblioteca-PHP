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
        <title>Sistema Biblioteca</title> // nombre de la pagina que se muestra en el navegador
        
        //llamada a los estilos de diseño de bootstrap
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    </head>
    
    <body>
        <div >
            <header>
                <?php include_once './base/header.php'; ?> //llama a otra pagina php para mostrar algo, como una masterpage
            </header> 
            
            <div>
                <?php include_once './base/volver.php';?> //llama a otra pagina php para mostrar algo, como una masterpage
            </div>
        </div>  
        
        <div class="container"><br>
            <form id="frm" class="form-horizontal"  method="POST" action="">
                <div class="form-group ">
                    <label class="control-label col-sm-2" for="rut">*Rut Usuario</label>
                    <div class="col-sm-2">
                        <input type="text" name="dev" id="dev" placeholder="ingresar solo numeros" minlength="8" maxlength="9" class="form-control" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>
                    
                    <label class="control-label col-sm-1" for="libro">*ID Libro</label>
                    <div class="col-sm-2">
                        <input type="text" name="devId" id="devId" placeholder="659901" minlength="6" maxlength="10" class="form-control" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>
                    &nbsp;
                    <input type="submit" name="eliminar" id="eliminar" value="Realizar Devolución" class="btn btn-success">
                   <div class="container"><br><h6 class="text-center"><b>Los campos que contienen * son necesarios.</b></h6></div>
                </div>
            </form>
        </div>
        
        <div class="container"><br><br>
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <th scope="col">Rut Usuario</th>
                        <th scope="col">ID Libro</th>
                        <th scope="col">Fecha de Prestamo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include './eliminar/realizarDevolucion.php';
                           include './listar/listarDevolucion.php'; ?>
                   <tr><td colspan="5"></td></tr>                    
                </tbody>
                <tfoot>
                    <tr><td colspan="5"></td></tr>
                </tfoot>
            </table>
            
            <div class="pull-right">
                <input type="submit" onclick="location.href='principal.php'" name="realizar" id="realizar" value="Aceptar" class="btn btn-success">                  
            </div>
        </div> 
   </body>
</html>




