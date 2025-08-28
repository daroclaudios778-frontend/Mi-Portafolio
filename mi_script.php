<?php
// Verifica que cURL esté funcionando correctamente
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.mercadopago.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo 'Conexión exitosa a la API de MercadoPago';
}
curl_close($ch);
?>