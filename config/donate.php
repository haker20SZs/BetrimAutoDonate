<?php

echo "<script> document.oncontextmenu = cmenu; function cmenu() { return false; } </script>";

include '../config.php';

if($ip > $_SERVER['REMOTE_ADDR']){

if(isset($_GET["secret_word"])){
  if($_GET["secret_word"] == $secret_word){
	
	$conn = new mysqli($mysqlhost, $mysqllogin, $mysqlpass, $mysqlbd);
	$sqlnickname = "SELECT * FROM nickname";
	if($result = $conn->query($sqlnickname)){
    foreach($result as $row){$nickname = $row["nickname"];}}
	
	$sqldonatename = "SELECT * FROM donatename";
	if($result = $conn->query($sqldonatename)){
    foreach($result as $row){$donatename = $row["donatename"];}}
	
	$sqlcaseid = "SELECT * FROM caseid";
	if($result = $conn->query($sqlcaseid)){
    foreach($result as $row){$caseid = $row["caseid"];}}

  $sqlmoneyamount = "SELECT * FROM moneyamount";
  if($result = $conn->query($sqlmoneyamount)){
    foreach($result as $row){$moneyamount = $row["moneyamount"];}}
	
	$rand = mt_rand(100,1000);
	$token = $user_token_vk;
	$user_id = $user_id_vk;
	$vk_msg = 'Успешная%20покупка%20-%20'. $namesite .',<br>%20Сообщения%20от%20магазина%20об%20успешной%20покупки:<br><br>У%20вас%20успешно%20приобрели%20товар<br>Пожалуйста,%20проверьте%20платёжную<br>Систему%20которая%20подключена%20к%20вашему<br>Магазину%20с%20уважениям%20'. $namesite .'<br><br>Company%20'. $namesite .'%20-%20Minecraft:PE%20::%20Server,';
	file_get_contents("https://api.vk.com/method/messages.send?user_id={$user_id}&message={$vk_msg}&random_id={$rand}&v=5.131&access_token={$token}");
	
	$to = $email;
	$subject = "Сообщения от магазина об успешной покупки";
	$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <style>
    * {
  margin: 0;
  padding: 0;
  font-size: 100%;
  line-height: 1.65; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color:  #8950FC;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #8950FC;
  border: solid #8950FC;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 680px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    padding: 40px 0;
    background: #000000;
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 30px 35px; }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        color: #888;
        text-decoration: none;
        font-weight: bold; }
</style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">
            <table>
                <tr>
                    <td align="center" class="masthead">
                        <h1>Успешная покупка</h1>
                    </td>
                </tr>
                <tr>
                    <td class="content">
                        <center><h2>Здравствуйте,</h2>
                        <p>Сообщения от магазина об успешной покупки:</p>
                    <p>
						
						У вас успешно приобрели товар<br>
						Пожалуйста, проверьте платёжную<br>
						Систему которая подключена к вашему<br>
						Магазину с уважениям '. $namesite .'<br>
						
					</p>
					    </center><br>
						<center><p><em>Company '. $namesite .' - Minecraft:PE :: Server,</em></p></center>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';
    $from = $botemail;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= "From: <".$from.">\r\n";
	
	if(mail($to,$subject,$message,$headers));
    header("Location: /rcon/?cmd={$cmdcase} {$nickname} {$caseid}&cmd2={$cmddonate} {$nickname} {$donatename}&cmd3={$cmdmoney} {$nickname} {$moneyamount}&bd={$caseid}&key={$secret_word}");
}else{
  header("Location: /");	
}

}else{
  header("Location: /");	
}

}else{
  die("hacking attempt!");
}

?>