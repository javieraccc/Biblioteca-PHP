<?php

include './conexionManager.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $busc_id = $_POST['idLibro'];
        $busc_nomb = $_POST['nombreLibro'];
        $busc_aut = $_POST['autor'];
    
//    require './conexionManager.php';
       $consulta = $conexion->prepare("SELECT * 
                                   FROM libros 
                                   WHERE   id_libros =:idLibro OR nombre = :nombreLibro OR autor =:autor");
        $consulta->execute(array(':idLibro' => $busc_id, ':nombreLibro' =>$busc_nomb, ':autor'=> $busc_aut));
    
        
        while($resultado = $consulta->fetch(PDO::FETCH_ASSOC)){
            
            echo"
            <tr>
                <td>".$resultado['id_libros']."</td>
                <td>".$resultado['nombre']."</td>
                <td>".$resultado['autor']."</td>
                <td>".$resultado['tipo_libro']."</td>
                <td>".$resultado['n_copias']."</td>
            <tr>
        ";          
        }; 
        
        if ($resultado == true) {
            echo "<div class='alert alert-success alert-dismissible text text-center'><button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
        }
}

