<?php
header('Content-type: application/json');

require 'rcon.php';
require '../config.php';

$host = $rconHost;
$port = $rconPort;
$password = $rconPassword;
$timeout = 3;

$response = array();
$rcon = new Rcon($host, $port, $password, $timeout);

if(!isset($_GET["cmd"])){
  $response['status'] = 'error';
  $response['error'] = 'Empty command';
}else{
  if ($rcon->connect()){
    $rcon->send_command($_GET['cmd']);
    $response['status'] = 'success';
    $response['command'] = $_GET['cmd'];
  }else{
    $response['status'] = 'error';
    $response['error'] = 'RCON connection error';
  }
}

if(!isset($_GET["cmd2"])){
  $response['status'] = 'error';
  $response['error'] = 'Empty command';
}else{
  if ($rcon->connect()){
    $rcon->send_command($_GET['cmd2']);
    $response['status'] = 'success';
    $response['command'] = $_GET['cmd2'];
  }else{
    $response['status'] = 'error';
    $response['error'] = 'RCON connection error';
  }
}

$servername = $mysqlhost; // локалхост
$username = $mysqllogin; // имя пользователя
$password = $mysqlpass; // пароль если существует
$dbname = $mysqlbd; // база данных
// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}

if(isset($_GET["bd"])){
	
  $nickname = "BetrimAutoDonate";
	$donatesuma = "BetrimAutoDonate";
	$donatename = "BetrimAutoDonate";
	$casesuma = "BetrimAutoDonate";
	$casename = "BetrimAutoDonate";
	$caseid = "BetrimAutoDonate";

$sql = "UPDATE `nickname` SET `nickname` = (SELECT '{$nickname}'); UPDATE `donatename` SET `donatename` = (SELECT '{$donatename}'); UPDATE `donatesuma` SET `donatesuma` = (SELECT '{$donatesuma}'); UPDATE `casesuma` SET `casesuma` = (SELECT '{$casesuma}'); UPDATE `casename` SET `casename` = (SELECT '{$casename}'); UPDATE `caseid` SET `caseid` = (SELECT '{$caseid}');";
}

if($conn->multi_query($sql) === TRUE){
   echo "Yes";
   header("Location: /");
   } else {
   echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

?>
