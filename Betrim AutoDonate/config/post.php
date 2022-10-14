<?php

include './config/config.php';
include "./config/payment.php";

$payment = new payment($config);

if(isset(
$_POST['buy'])){
$payment->send(
$_POST['nikname'],
$_POST['group'],
$_POST['case'],
$_POST['refkey']);
}
?>