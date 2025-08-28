<?php 
include "./views/encabezado.php"; 

// Muestra los datos actuales del carrito para depuración
echo "<pre>";
print_r(isset($_SESSION['carrito']) ? $_SESSION['carrito'] : "El carrito está vacío.");
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="./css/cards.css">
    <link rel="stylesheet" href="./css/styler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h1 class="text-center"><b>Tienda Online</b></h1>

        <!-- Formulario de búsqueda -->
        <div class="text-center">
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Buscar producto..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <?php
        // Mensaje de depuración de la búsqueda
        if (isset($_GET['search'])) {
            //echo "<p>Buscando: " . htmlspecialchars($_GET['search']) . "</p>";  // Depuración: muestra el término de búsqueda
        }
        ?>

        <div class="row">
            <?php
            include "./includes/db.php";
            
            // Depuración: Verificar la conexión
            if (!$conexion) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            // Si hay un término de búsqueda
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $searchTerm = mysqli_real_escape_string($conexion, $_GET['search']); // Escapar el término de búsqueda
                // Depuración: Verifica si el término de búsqueda es correcto
                //echo "<p>Consulta con el término: '$searchTerm'</p>";
                
                // Consulta para la búsqueda
                $consult = "SELECT id, imagen, descripcion, stock, status, precioVenta 
                            FROM perifericos 
                            WHERE descripcion LIKE '%$searchTerm%' 
                            ORDER BY id DESC";
            } else {
                // Si no hay término de búsqueda, mostrar todos los productos
                $consult = "SELECT id, imagen, descripcion, stock, status, precioVenta 
                            FROM perifericos 
                            ORDER BY id DESC";
            }

            // Ejecutar la consulta
            $result = mysqli_query($conexion, $consult);

            // Depuración: Verificar si la consulta se ejecutó correctamente
            if (!$result) {
                die("Error en la consulta: " . mysqli_error($conexion));
            }

            if ($result && mysqli_num_rows($result) > 0) {
                while ($fila = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-4">
                        <br>
                        <div class="card">
                            <!-- Imagen dinámica desde la base de datos -->
                            <img src="<?php echo $fila['imagen']; ?>" class="card-img-top" alt="Imagen del producto">
                            <div class="card-body">
                                <h5 class="card-title text-center"><b><?php echo $fila['descripcion']; ?></b></h5>
                                <p class="card-text text-center stock">Stock: <?php echo $fila['stock']; ?></p>
                                <p class="card-text text-center status">Status: <?php echo $fila['status']; ?></p>
                                <p class="card-text text-center">Precio: <?php echo '$' . $fila['precioVenta']; ?></p>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="hidden" class="precioVenta" value="<?php echo $fila['precioVenta']; ?>">
                                        <button class="btn btn-primary agregar-carrito" style="width: 100%;"
                                            data-id="<?php echo $fila['id']; ?>"
                                            data-descripcion="<?php echo $fila['descripcion']; ?>"
                                            data-precioVenta="<?php echo $fila['precioVenta']; ?>"
                                            data-status="<?php echo $fila['status']; ?>"
                                            data-stock="<?php echo $fila['stock']; ?>">
                                            <b>Agregar al carrito</b> <i class="fa fa-shopping-cart"></i> 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center'>No se encontraron productos.</p>";
            }
            ?>
        </div>
    </div>
    <br>
    <br>
    <?php include "./views/pie.php"; ?>
</body>

</html>
