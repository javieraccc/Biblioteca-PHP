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
            
            <div>
                <?php include_once './base/volver.php';?>
            </div>
        </div>  
        
        <div class="container">
            <form id="frm" class="form-horizontal" method="POST" action="">
                <div class="form-group">
                    
                    <label class="control-label col-sm-2" for="rut">Rut Usuario</label>
                    <div class="col-sm-2">
                        <input type="text" name="rut" id="rut" placeholder="ingresar solo numeros"  minlength="9" maxlength="9" class="form-control" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>
                    
                    <label class="control-label col-sm-1" for="libro">ID Libro</label>
                    <div class="col-sm-2">
                        <input type="text" name="idLibro" id="idLibro" placeholder="659901" minlength="6" maxlength="10" class="form-control" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>
                                        
                    <label class="control-label col-sm-2" for="libro">fecha Reserva</label>
                    <div class="col-sm-2">
                        <input type="date" name="fechaReserva" id="fechaReserva" class="form-control"
                         required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                            <script>
                                $(document).ready( function() {
                                $('#fecha').val(new Date().toDateInputValue());
                                });
                            </script>
                    </div>
                    <div align="center">
                        <br><br>
                        <br><br>
                        <input type="submit" name="realizarreserva" id="realizarreserva" value="Realizar Reserva" class="btn btn-success">
                    </div>
                </div>
            </form>
             <div id="mensaje"> </div>
            <br>
            <div class="container">
                <table id="tbl" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Rut Usuario</th>
                            <th scope="col">ID Libro</th>
                            <th scope="col">Fecha de Reserva</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include './insertarReserva.php';
                              include './listar/listarReserva.php';?>
                        <tr><td colspan="4"></td></tr>
                    </tbody>
                    <tfoot>
                        <tr><td colspan="4"></td></tr>
                    </tfoot>
                </table>
            </div>
            <div class="pull-right">
                <input type="submit" onclick="location.href='principal.php'" name="realizar" id="realizar" value="Aceptar" class="btn btn-success">                  
            </div>
        </div>
      </body>
</html>




