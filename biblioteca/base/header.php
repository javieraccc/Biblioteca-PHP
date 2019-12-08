<!DOCTYPE html>
<html>
    /* este documento es el header de todo el programa, carga la imagen de fondo de la pagina e informacion basica
    como nombre de usuario y cerrar la sesion */
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  
  <body>
    <div class="container">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">                 
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> 
                        <img src="img/libro.jpg" alt="Logo"  style="width:60px;">
                    </a>

                    <ul class="nav navbar-nav">
                        <a class="navbar-brand" href="#"><br>Sistema Biblioteca</a>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                            <br><ol>Bienvenido: &nbsp; <b><?= $_SESSION['usuarioLogin']?></b> <br></ol> //
                            <ol><a href="cerrar.php">[Cerrar Sesión]</a> </ol><br>                                                     
                    </ul>
                </div>
            </nav>            
        </header>       
    </div>
  </body>
</html>
                        
                      
                       

