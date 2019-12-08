<?php
include './conexionManager.php';

$sql="SELECT rut, id_libros, fecha_reserva FROM reservas ORDER BY fecha_reserva asc";
$resultado = $conexion->prepare($sql);
$resultado->execute();

    if($resultado !=false){
    while ($data=$resultado->fetch(PDO::FETCH_ASSOC)){
        
//        $arreglo["data"][]=$data;
        echo"
            <tr>
                <td>".$data['rut']."</td>
                <td>".$data['id_libros']."</td>
                <td>".$data['fecha_reserva']."</td>
            <tr>
        ";
      
    }
//    echo json_encode($arreglo);
    } else {
        echo "Error";
}
    
    $resultado->closeCursor();
    $conexion = NULL;
?>