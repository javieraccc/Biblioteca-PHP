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
            <div>
                <?php include_once './base/header.php';?>
            </div>
            
            <div>
                <?php include_once './base/volver.php';?>
            </div>
        </div>
        <div class="container">
            <form id="frm" class="form-horizontal" method="POST" action="">
                <div class="form-group">

                    <label class="control-label col-sm-2" for="rut">Numero de Ficha</label>
                    <div class="col-sm-2">
                        <input type="text" name="numero" id="numero" placeholder="ingresar solo numeros" class="form-control"  onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>

                    <label class="control-label col-sm-2" for="libro">Rut Usuario</label>
                    <div class="col-sm-2">
                        <input type="text" name="rut" id="rut" placeholder="659901" minlength="6" maxlength="10" class="form-control"  onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>

                    <label class="control-label col-sm-2" for="libro">Nombres Usuario</label>
                    <div class="col-sm-2">
                        <input type="text" name="nombre" id="nombre" placeholder="José Burgos" class="form-control">
                    </div>
                    <div align="center">
                        <br><br>
                        <br><br>
                        <input type="submit" name="realizarreserva" id="realizarreserva" value="buscar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
        
        
        
        <div class="container">
            <table id="tbl" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Numero de Ficha</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Comuna</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">celular</th>
                        <th scope="col">Tipo de Usuario</th>
                        <?php include './buscar/buscarUsuario.php'; ?>
                    </tr>
                </thead>
                <tbody >
                    <tr><td colspan="10"></td></tr>
                    <?php include_once './listar/listarusuario.php';?>
                    <tr><td colspan="10"></td></tr>
                </tbody>
                <tfoot>
                    <tr><td colspan="10"></td></tr>
                </tfoot>
             </table>

       </div>
    </body>
</html>