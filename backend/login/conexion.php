<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=login_tuto', 'root', '1234');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>