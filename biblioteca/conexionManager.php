<?php

try{
    $conexion = new PDO('mysql:host=localhost; dbname=base_biblioteca', 'bibliotecario', 'admin123');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    
     
    
} catch (Exception $e) {
    
    echo "ERROR: ".$e->getMessage();   

}


//if ($conexion) {
//    
//    echo "Conexion Exitosa";    
//}else{
//    echo "Conexion Fallida";
//}

?>






