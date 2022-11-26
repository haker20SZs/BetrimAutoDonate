<?php

require './config.php';

if($_GET["key"] == $secret_word){

$products = curl_init('https://easydonate.ru/api/v3/shop/products');
curl_setopt($products, CURLOPT_HTTPHEADER, array('Shop-Key:' . $key));
curl_setopt($products, CURLOPT_RETURNTRANSFER, true);
curl_setopt($products, CURLOPT_SSL_VERIFYPEER, true);

$pay = curl_exec($products); 
curl_close($products);
$sys_products = json_decode($pay, true)["response"][$_GET["id"]]['id'];

$get = array(
	'customer'  => $_GET["nick"],
	'server_id' => intval($serverid),
	'email' => $email,
	'coupon' => $_GET["ref"],
	'products' => '{"' . $sys_products . '":1}',
	'success_url' => $_GET["success_url"]
);

$get = curl_init('https://easydonate.ru/api/v3/shop/payment/create?' . http_build_query($get));
curl_setopt($get, CURLOPT_HTTPHEADER, array('Shop-Key:' . $key));
curl_setopt($get, CURLOPT_RETURNTRANSFER, true);
curl_setopt($get, CURLOPT_SSL_VERIFYPEER, true);

$pay = curl_exec($get); 
curl_close($get);

$check = json_decode($pay, true)["response"];
$errorurl = $website;

if($check == "Сервер с ID {$serverid} не найден."){
	header("Location: " . $errorurl);
}elseif($check == "Сервер с ID 0 не найден."){
	header("Location: " . $errorurl);
}else{
	$sys_pay = json_decode($pay, true)["response"]['url'];
	header("Location: " . $sys_pay);
}

}else{
	header("Location: " . $website);
}

?>