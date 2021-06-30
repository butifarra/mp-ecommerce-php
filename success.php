<?php
        
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
//El id de desarrollador para el examen
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
    ?>
    <p>¡Felicitaciones! Su pago ha sido aprobado. Estos son sus datos:</p>
    <p>collection id: <?=$_GET["collection_id"] ?></p>
    <p>collection_status: <?=$_GET["collection_status"] ?></p>
    <p>payment id: <?=$_GET["payment_id"] ?></p>
    <p>status: <?=$_GET["status"] ?></p>
    <p>external_reference: <?=$_GET["external_reference"] ?></p>
    <p>payment_type: <?=$_GET["payment_type"] ?></p>
    <p>merchant_order_id: <?=$_GET["merchant_order_id"] ?></p>
    <p>prefernce_id: <?=$_GET["preference_id"] ?></p>
    <p>site_id: <?=$_GET["site_id"] ?></p>
    <p>processing_mode: <?=$_GET["processing_mode"] ?></p>
    <p>merchant_account_id: <?=$_GET["merchant_account_id"] ?></p>
    
