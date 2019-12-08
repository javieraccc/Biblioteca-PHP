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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
    </body>
</html>




