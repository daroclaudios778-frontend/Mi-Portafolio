<?php
include "./includes/db.php";

$consult = "SELECT * FROM inventario ORDER BY id DESC LIMIT 4"; // Mostrar los últimos 10 productos
$result = mysqli_query($conexion, $consult);
if ($result && mysqli_num_rows($result) > 0) {
    while ($fila = mysqli_fetch_assoc($result)) {
?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php echo $fila['name_file']; ?>" class="card-img-top" alt="Imagen del producto">
                <div class="card-body">
                    <h5 class="card-title text-center"><b><?php echo $fila['descripcion']; ?></b></h5>
                    <p class="card-text text-center">Precio: <?php echo '$' . $fila['precioVenta']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p class='text-center'>No hay productos disponibles en esta categoría.</p>";
}
?>