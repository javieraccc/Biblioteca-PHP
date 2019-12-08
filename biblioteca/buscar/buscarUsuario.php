<?php
include './conexionManager.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $busc_no = $_POST['numero'];
    $busc_rut = $_POST['rut'];
    $busc_nom = $_POST['nombre'];
    
    require './conexionManager.php';
    
    $consulta = $conexion->prepare("SELECT * 
                                   FROM datos_usuario 
                                   WHERE   n_ficha =:numero OR rut = :rut OR nombres =:nombre");
    $consulta->execute(array(':numero' => $busc_no, ':rut' =>$busc_rut, ':nombre'=> $busc_nom));
    

        while($resultado = $consulta->fetch(PDO::FETCH_ASSOC)){
            
            echo"
            <tr>
                <td>".$resultado['n_ficha']."</td>
                <td>".$resultado['nombres']."</td>
                <td>".$resultado['apellidos']."</td>
                <td>".$resultado['rut']."</td>
                <td>".$resultado['fecha_nacimiento']."</td>
                <td>".$resultado['direccion']."</td>
                <td>".$resultado['comuna']."</td>
                <td>".$resultado['fono_fijo']."</td>
                <td>".$resultado['celular']."</td>
                <td>".$resultado['tipo_usuario']."</td>                                
            <tr>
        ";          
        };
    
    
}
