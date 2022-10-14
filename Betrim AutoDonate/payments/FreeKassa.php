<?php

$order_id = "Покупка товара";
$merchant_id = $id;
$secret_word = $key;
$order_amount = $casesuma + $donatesuma;
$currency = 'RUB';
$sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$currency.':'.$order_id);
header("Location: https://pay.freekassa.ru/?m={$merchant_id}&oa={$order_amount}&o={$order_id}&s={$sign}&currency={$currency}&lang=ru");

?>