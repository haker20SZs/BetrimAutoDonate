<?php

$m_shop = $id;
$m_orderid = mt_rand(1,9999);
$m_amount = number_format($casesuma + $donatesuma + $moneysuma, 2, '.', '');
$m_curr = 'RUB';
$m_desc = null;
$m_key = $key;
$arHash = array($m_shop, $m_orderid, $m_amount, $m_curr, $m_desc);
$arHash[] = $m_key;
$sign = strtoupper(hash('sha256', implode(':', $arHash)));
header("Location: https://payeer.com/merchant/?m_shop={$m_shop}&m_orderid={$m_orderid}&m_amount={$m_amount}&m_curr={$m_curr}&m_desc={$m_desc}&m_sign={$sign}");

?>