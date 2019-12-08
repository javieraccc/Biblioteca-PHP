<?php include './conexionManager.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $busqueda_rut= $_POST["rut"];
    $busqueda_idLibro= $_POST["idLibro"];
    $busqueda_fechaReserva= $_POST["fechaReserva"];
    
    $insertar = $conexion->prepare("INSERT INTO reservas (rut, id_libros, fecha_reserva) VALUES (:rut, :idLibro, :fechaReserva)");
    $insertar ->execute(array(":rut" => $busqueda_rut, ":idLibro" => $busqueda_idLibro, ":fechaReserva" => $busqueda_fechaReserva));

    if ($insertar == true) {
    echo "<div class='alert alert-success alert-dismissible text text-center'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Exito!</strong> registro insertado correctamente</div>";
    }
    $insertar ->closeCursor();
    $conexion = NULL;
}

    

