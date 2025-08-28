<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.mercadopago.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "Error de conexión: " . curl_error($ch);
} else {
    echo "Conexión exitosa";
}
curl_close($ch);
?>
