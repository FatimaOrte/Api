<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $description = $_POST["descripcion"];
    $stock = $_POST["stock"];
   

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO productos (nombre, descripcion, stock) VALUES ('".$name."', '".$description."','".$stock."')";

    

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:ver.php");

?>