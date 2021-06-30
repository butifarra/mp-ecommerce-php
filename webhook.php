<?php

        require __DIR__ .  '/vendor/autoload.php';
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    
    http_response_code(200);
    
    $input = @file_get_contents('php://input');
    $event_json = json_decode($input);
    file_put_contents("denis.json",$event_json);
    
    /* 

$url='https://butifarra-mp-ecommerce-php.herokuapp.com/prueba.php';


// Create a new cURL resource
$ch = curl_init($url);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $event_json);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);

    header('Location: https://butifarra-mp-ecommerce-php.herokuapp.com/prueba.php');
    */

    
          $file = fopen(__DIR__ . '/denis.json','w');
          fwrite($file, $event_json);
          fclose($file);

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }
//curl https://api.mercadopago.com/v1/payments/15603808803?access_token=APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398