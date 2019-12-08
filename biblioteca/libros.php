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

                    <label class="control-label col-sm-2" for="rut">ID Libro</label>
                    <div class="col-sm-2">
                        <input type="text" name="idLibro" id="idLibro" placeholder="659904" class="form-control"  onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                    </div>

                    <label class="control-label col-sm-2" for="libro">Nombre Libro</label>
                    <div class="col-sm-2">
                        <input type="text" name="nombreLibro" id="nombreLibro" placeholder="La larga marcha" class="form-control">
                    </div>

                    <label class="control-label col-sm-2" for="libro">Autor</label>
                    <div class="col-sm-2">
                        <input type="text" name="autor" id="autor" placeholder="Richard Bachman	" class="form-control">
                    </div>
                    <div align="center">
                        <br><br>
                        <br><br>
                        <input type="submit" name="buscar" id="buscar" value="buscar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
        
        <div class="container">
            <table id="tbl" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Libro</th>
                        <th scope="col">Nombre Libro</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Tipo de Libro</th>
                        <th scope="col">Numero de Copias</th>
                        <?php include './buscar/buscarLibro.php'; ?>
                    </tr>
                </thead>
                <tbody >
                    <tr><td colspan="5"></td></tr>
                    <?php include_once './listar/listarLibros.php'; ?>
                    <tr><td colspan="5"></td></tr>
                </tbody>
                <tfoot>
                    <tr><td colspan="5"></td></tr>
                </tfoot>
             </table>

       </div>
    </body>
</html>