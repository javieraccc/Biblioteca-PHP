<?php
include './conexionManager.php';
//$busqueda= $_POST[""];
$sql2="SELECT * FROM datos_usuario";
$resultado2 = $conexion->prepare($sql2);
$resultado2->execute(array());

    while ($data=$resultado2->fetch(PDO::FETCH_ASSOC)){
        
//        $arreglo["data"][]=$data;
        echo"
            <tr>
                <td>".$data['n_ficha']."</td>
                <td>".$data['nombres']."</td>
                <td>".$data['apellidos']."</td>
                <td>".$data['rut']."</td>
                <td>".$data['fecha_nacimiento']."</td>
                <td>".$data['direccion']."</td>
                <td>".$data['comuna']."</td>
                <td>".$data['fono_fijo']."</td>
                <td>".$data['celular']."</td>
                <td>".$data['tipo_usuario']."</td>                
            <tr>
        ";
      
    }
// echo json_encode($arreglo);
    $resultado2->closeCursor();
    