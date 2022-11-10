<html>
    <head>
        <title>Formulario captura</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    
    <body>
        <div id="cabecera">
        <h1>Registro de Productos</h1>
        
       
                <!-- creaciópn del formulario -->
        <!-- action: (Formulario) indica hacia donde envio la informacion -->
        <!-- method: (Formulario) metodo de envio get/post -->
        <!-- name: (Inputs) identificar la informacion a enviar -->
               
        <form action="new_respuesta.php" method="post">
            
            <div><h3>Nombre del Producto</h3></div>
            <input type="text" name="nombre" class="rounded" placeholder="Nombre del producto"><br>
            
            
            <div><h3>Descripción del Producto</h3></div>
             <textarea rows="4" cols="50" name="descripcion" placeholder="Descripción del producto" class="desarea"></textarea><br>
            
            <div><h3>Stock del Producto</h3></div>
            <input type="text" name="stock" class="rounded" placeholder="Stock del producto"><br><br>
            
            <button class="boton">Guardar</button>
            
           
               
        </form>
        
        </div>
        
        <div id="contenido">
        
             <!-- creaciópn del reporte -->
        <hr>
        
         <table>
            <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stock</th>
            </tr>
            
            <?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM productos";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $productos = $query->fetchAll();

    
    //echo "<pre>";
    //print_r($productos);
    //echo "</pre>";
            
            
            
         ?>
    <?php 
                for($x=0; $x < count($productos); $x++){
            ?>  
                <tr>
                    <td><?php echo $productos[$x]["id"]; ?></td>
                    <td><?php echo $productos[$x]["nombre"]; ?></td>
                    <td><?php echo $productos[$x]["descripcion"]; ?></td>
                    <td><?php echo $productos[$x]["stock"]; ?></td>
                </tr>
            <?php
                }
            ?>
             </table>
            <br>
        </div>
        <div id="pie">
        <h3>Jesus Apolinar</h3>
        
        
        </div>
       
      
        
        
        
        
        
        
        
        
    
    </body>
</html>