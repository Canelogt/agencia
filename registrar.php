<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <title>inicio de sesion</title>
</head>

<body>
    <section class="vh-100">
        <div id="login"> 
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="conexion.php" method="post">
                                <h3 class="text-center text-info">registro de viajes</h3>
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="crear viajero">
                                <head>
    <title>Tabla de Viajeros</title>
</head>
<body>
    <h2>Tabla de Viajeros</h2>
    <table Border="4">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Fecha</th>
        </tr>
        <?php
        // Simulación de datos de viajeros
        $viajeros = array(
            array("id" => 1, "nombre" => "Juan Pérez", "ciudad" => "Ciudad A", "fecha" => "2023-08-07"),
            array("id" => 2, "nombre" => "María Gómez", "ciudad" => "Ciudad B", "fecha" => "2023-08-08"),
            // Agrega más datos de viajeros aquí
        );

        // Recorre el arreglo de viajeros y crea filas en la tabla
        foreach ($viajeros as $viajero) {
            echo "<tr>";
            echo "<td>{$viajero['id']}</td>";
            echo "<td>{$viajero['nombre']}</td>";
            echo "<td>{$viajero['ciudad']}</td>";
            echo "<td>{$viajero['fecha']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>