<?php

//Command - Settings//
$cmddonate = "setgroup"; // Команда выдачи доната
$cmdcase = "dc add"; // Команда выдачи донат кейса
$cmdmoney = "addmoney"; // Команда выдачи монет
//Command - Settings//

//Rcon - Settings//
$rconHost = "localhost"; // IP адрес сервера
$rconPort = 19132; // порт сервера
$rconPassword = "root"; // пароль от RCON сервера
//Rcon - Settings//

//Mysql - Settings//
$mysqlhost = "localhost"; // IP адрес бд
$mysqllogin = "root"; // Логин от базы данных
$mysqlpass = "root"; // Пароль от базы данных
$mysqlbd = "root"; // Названия базы данных
//Mysql - Settings//

//WEB - Settings//
$email = "Ваш email";//null
$botemail = "bot@milord-pe.ru";//null
$namesite = "BetrimAutoDonate";
$urlsite = "http://donate";
$urlhome = "http://milord-pe.ru";
$user_id_vk = null;//null
$user_token_vk = null;//null
$secret_word = "key"; // секретный ключ для проверки на платежной системе
$keyref = "4862"; // реферальный ключ на скидку - https://site/?ref=4862
$discount = "10"; // -15руб скидка в размере суммы
$ip = "127.0.0.1"; //IP - VDS или же Web хостинга
//WEB - Settings//


//FreeKassa//AnyPay//Payeer//
$systempay = "Payeer.php";
$key = "Ключ от платежной системы";
$id = "ID от платежной системы";
//FreeKassa//AnyPay//Payeer//

//Ссылка на успешную оплату для выдачи доната
//https://{Ваш домен}/config/donate.php?secret_word={Текст из строки secret_word}
//Ссылка на успешную оплату для выдачи доната

?>
