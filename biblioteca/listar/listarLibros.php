<?php
include './conexionManager.php';

$sql="SELECT * FROM libros";
$resultado = $conexion->prepare($sql);
$resultado->execute();

    if($resultado !=false){
    while ($data=$resultado->fetch(PDO::FETCH_ASSOC)){
        
//        $arreglo["data"][]=$data;
        echo"
            <tr>
                <td>".$data['id_libros']."</td>
                <td>".$data['nombre']."</td>
                <td>".$data['autor']."</td>
                <td>".$data['tipo_libro']."</td>
                <td>".$data['n_copias']."</td>
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

