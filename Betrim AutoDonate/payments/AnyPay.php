<?php

$project_id = $id;
$pay_id = mt_rand(1,9999999);
if($refkey == $keyref){
if($_GET["refkey"]){
  $amount = $casesuma + $donatesuma - $discount;
}else{
  $amount = $casesuma + $donatesuma;
  }
}else{
  $amount = $casesuma + $donatesuma;	
}
$currency = 'RUB';
$desc = 'Покупка товара';
$success_url = '';
$fail_url = '';
$secret_key = $key;

$arr_sign = array($project_id,$pay_id,$amount,$currency,$desc,$success_url,$fail_url,$secret_key);

$sign = hash('sha256', implode(':', $arr_sign)); 
header("Location: https://anypay.io/merchant?merchant_id={$project_id}&pay_id={$pay_id}&amount={$amount}&currency={$currency}&sign={$sign}&desc={$desc}&lang=ru");

?>