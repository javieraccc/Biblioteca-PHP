<?php
include './conexionManager.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $eliminar_r = $_POST['dev'];
    $eliminar_id = $_POST['devId']; 
    
    $eliminar = $conexion->prepare("DELETE FROM devolucion WHERE rut = :dev AND id_libros = :devId" );
    $eliminar ->execute(array(':dev' =>$eliminar_r, ':devId' => $eliminar_id));
    
     if ($eliminar_r && $eliminar_id == true) {
        echo "<div class='alert alert-success alert-dismissible text text-center'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Listo!</strong> El Libro Ha Sido Devuelto</div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text text-center'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> Debe Ingresar Rut Del Usuario y ID del Lbro</div>";
        
    }
    
    $eliminar ->closeCursor();
    $conexion = NULL;
    
}


