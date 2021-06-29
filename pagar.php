<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');



print_r($_POST);
echo "$_POST[0]";
// Crea un objeto preferencia
$preference = new MercadoPago\Preference();

//Crea un ítem en la preferencia
$item=new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;







