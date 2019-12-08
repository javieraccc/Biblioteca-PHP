<?php
include './conexionManager.php';
//$busqueda= $_POST[""];
$sql="SELECT rut, id_libros, fecha_inicio FROM devolucion ORDER BY fecha_inicio asc";
$resultado = $conexion->prepare($sql);
$resultado->execute(array());

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
    $resultado->closeCursor();
?>