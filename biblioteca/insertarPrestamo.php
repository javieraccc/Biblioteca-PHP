<?php include './conexionManager.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $busqueda_rut= $_POST["rut"];
    $busqueda_idLibro= $_POST["idLibro"];
    $busqueda_fechaInicio= $_POST["fechaInicio"];
    
    $insertar = $conexion->prepare("INSERT INTO prestamos (rut, id_libros, fecha_inicio) VALUES (:rut, :idLibro, :fechaInicio)");
    $insertar ->execute(array(":rut" => $busqueda_rut, ":idLibro" => $busqueda_idLibro, ":fechaInicio" => $busqueda_fechaInicio));

    $insertar2 = $conexion->prepare("INSERT INTO devolucion (rut, id_libros, fecha_inicio) VALUES (:rut, :idLibro, :fechaInicio)");
    $insertar2 ->execute(array(":rut" => $busqueda_rut, ":idLibro" => $busqueda_idLibro, ":fechaInicio" => $busqueda_fechaInicio));

    if ($insertar == true) {
    echo "<div class='alert alert-success alert-dismissible text text-center'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Exito!</strong> registro insertado correctamente</div>";
    }
    $insertar ->closeCursor();
    $insertar2 ->closeCursor();
    $conexion = NULL;
}



