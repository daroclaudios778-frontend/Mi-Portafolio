<?php

require __DIR__  . '/vendor/autoload.php';

// REPLACE WITH YOUR ACCESS TOKEN
MercadoPago\SDK::setAccessToken("TEST-7767597209288530-010400-e150734febee80060ffeaf26e579f06b-2189108397");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($path){
    case '/create_preference':
        $json = file_get_contents("php://input");
        $data = json_decode($json);

        // Create preference
        $preference = new MercadoPago\Preference();

        $item = new MercadoPago\Item();
        $item->title = $data->description;
        $item->quantity = $data->quantity;
        $item->unit_price = $data->price;

        $preference->items = array($item);

        // Configure back URLs
        $preference->back_urls = array(
            "success" => "http://pasarela_mercadopago.html:8080/feedback",
            "failure" => "http://pasarela_mercadopago.html/feedback", 
            
        );
        $preference->auto_return = "approved"; 

        // Save preference and return the ID
        $preference->save();

        $response = array('id' => $preference->id);
        echo json_encode($response);
        break;

    case '/feedback':
        // Display payment feedback
        $respuesta = array(
            'Payment' => $_GET['payment_id'],
            'Status' => $_GET['status'],
            'MerchantOrder' => $_GET['merchant_order_id']
        ); 
        echo json_encode($respuesta);
        break;

    default:
        // Default case to handle other paths (if any)
        echo "Page not found";
}
