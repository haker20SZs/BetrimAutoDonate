<?php

include "../config.php";

if($_GET["key"] > $secret_word){ //https://{domain}/mysql/reset.php?key={secret_word}

$conn = new mysqli($mysqlhost, $mysqllogin, $mysqlpass, $mysqlbd);

if($conn->connect_error){
   die("Ошибка подключения: " . $conn->connect_error);
}

$nickname = "BetrimAutoDonate";
$donatesuma = "BetrimAutoDonate";
$donatename = "BetrimAutoDonate";
$casesuma = "BetrimAutoDonate";
$casename = "BetrimAutoDonate";
$caseid = "BetrimAutoDonate";
$moneyname = "BetrimAutoDonate";
$moneyamount = "BetrimAutoDonate";
$moneysuma = "BetrimAutoDonate";

$sql = "UPDATE `nickname` SET `nickname` = (SELECT '{$nickname}'); UPDATE `donatename` SET `donatename` = (SELECT '{$donatename}'); UPDATE `donatesuma` SET `donatesuma` = (SELECT '{$donatesuma}'); UPDATE `casesuma` SET `casesuma` = (SELECT '{$casesuma}'); UPDATE `casename` SET `casename` = (SELECT '{$casename}'); UPDATE `caseid` SET `caseid` = (SELECT '{$caseid}'); UPDATE `moneysuma` SET `moneysuma` = (SELECT '{$moneysuma}'); UPDATE `moneyamount` SET `moneyamount` = (SELECT '{$moneyamount}'); UPDATE `moneyname` SET `moneyname` = (SELECT '{$moneyname}');";

if($conn->multi_query($sql) === TRUE){
   echo "Yes";
   header("Location: /");
}else{
   echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

}else{
   header("Location: /");
}

?>