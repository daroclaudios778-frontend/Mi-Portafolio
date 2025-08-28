<?php
require __DIR__ . '/vendor/autoload.php'; // Carga las clases de MercadoPago

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$carrito = $_SESSION['carrito'];

if (empty($carrito)) {
    echo json_encode(["error" => "El carrito está vacío"]);
    exit;
}

// Configurar MercadoPago con tu Access Token
SDK::setAccessToken("APP_USR-5558225406287824-020511-62c71cba9f4f87202df37e9a7e2d9624-2252621240"); // Reemplaza con tu clave real



// Crear preferencia de pago
$preference = new Preference();
$items = [];

foreach ($carrito as $item) {
    $producto = new Item();
    $producto->title = $item['descripcion'];
    $producto->quantity = $item['cantidad'];
    $producto->unit_price = floatval($item['precioVenta']);
    $items[] = $producto;
}

$preference->items = $items;



$preference->back_urls = [
    "success" => "https://localhost/tienda_online_basico.php/pasarela_mercadopago.html",  // URL de éxito
    "pending" => "localhost/tienda_online_basico.html",  // URL de pendiente
    "failure" => "https://tusitio.com/pago_cancelado"  // URL de cancelación
];

// Definir la URL de redirección final
$preference->auto_return = "approved"; // Esto redirige automáticamente al usuario a la URL de éxito si el pago es aprobado




$preference->save();

echo json_encode(["preference_id" => $preference->id]);
?>
