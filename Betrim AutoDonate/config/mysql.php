<?php

echo "<script> document.oncontextmenu = cmenu; function cmenu() { return false; } </script>";

include '../config.php';

// Подключение к MySQL
$servername = $mysqlhost; // локалхост
$username = $mysqllogin; // имя пользователя
$password = $mysqlpass; // пароль если существует
$dbname = $mysqlbd; // база данных
// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM name";
if($result = $conn->query($sql)){
    foreach($result as $row){
        $username = $row["name"];
    }
}

if(isset($_GET["nickname"],$_GET["donatename"],$_GET["donatesuma"],$_GET["casename"],$_GET["casesuma"],$_GET["caseid"],$_GET["lastname"],$_GET["refkey"])){

if($_GET["nickname"]){
  $nickname = $_GET["nickname"];
}else{
  $nickname = null;
}

if($_GET["donatename"]){
  $donatename = $_GET["donatename"];
}else{
  $donatename = null;
}

if($_GET["donatesuma"]){
  $donatesuma = $_GET["donatesuma"];
}else{
  $donatesuma = null;
}

if($_GET["casename"]){
  $casename = $_GET["casename"];
}else{
  $casename = null;
}

if($_GET["casesuma"]){
  $casesuma = $_GET["casesuma"];
}else{
  $casesuma = null;
}

if($_GET["caseid"]){
  $caseid = $_GET["caseid"];
}else{
  $caseid = null;
}

if($_GET["lastname"]){
  $lastname = $_GET["lastname"];
}else{
  $lastname = null;
}

if($_GET["refkey"]){
  $refkey = $_GET["refkey"];
}else{
  $refkey = null;
}

$sql = "UPDATE `lastshop` SET `lastshop` = (SELECT '{$lastname}'); UPDATE `nickname` SET `nickname` = (SELECT '{$nickname}'); UPDATE `donatename` SET `donatename` = (SELECT '{$donatename}'); UPDATE `donatesuma` SET `donatesuma` = (SELECT '{$donatesuma}'); UPDATE `casesuma` SET `casesuma` = (SELECT '{$casesuma}'); UPDATE `casename` SET `casename` = (SELECT '{$casename}'); UPDATE `caseid` SET `caseid` = (SELECT '{$caseid}');";
}

if($conn->multi_query($sql) === TRUE){
   echo "Yes";
        } else {
   echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

if($refkey == $keyref){
    include '../payments/'. $systempay;
        }else{
    include '../payments/'. $systempay;
}

// Закрыть подключение
$conn->close();
?>