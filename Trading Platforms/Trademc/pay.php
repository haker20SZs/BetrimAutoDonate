<?php

if(isset($_GET["cart_id"], $_GET["pending_url"], $_GET["fail_url"], $_GET["success_url"])){
	$cart_id = $_GET["cart_id"];
	$pending_url = $_GET["pending_url"];
	$fail_url = $_GET["fail_url"];
	$success_url = $_GET["success_url"];
	header("Location: https://pay.trademc.org/?pending_url={$pending_url}&fail_url={$fail_url}&success_url={$success_url}&cart_id={$cart_id}");
}else{
	header("Location: https://$_SERVER[SERVER_NAME]/");
	exit();
}

?>