<?php
include './conexionManager.php';

$sql="SELECT rut, id_libros, fecha_inicio FROM prestamos ORDER BY fecha_inicio asc";
$resultado = $conexion->prepare($sql);
$resultado->execute();

    if($resultado !=false){
    while ($data=$resultado->fetch(PDO::FETCH_ASSOC)){
        
//        $arreglo["data"][]=$data;
        echo"
            <tr>
                <td>".$data['rut']."</td>
                <td>".$data['id_libros']."</td>
                <td>".$data['fecha_inicio']."</td>
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
    
    