<?php

class payment{
	
var $config;

function __construct ($config){
	$this->config = $config;
}

function send($nickname, $form, $refkey){
	
	include './config.php';
	
	$donatename = $this->config['groups'][$form]['name'];
	$donatesuma = $this->config['groups'][$form]['price'];
	$casename = $this->config['cases'][$form]['name'];
	$casesuma = $this->config['cases'][$form]['price'];
	$caseid = $this->config['cases'][$form]['caseid'];
	$moneyamount = $this->config['moneys'][$form]['money'];
	$moneyname = $this->config['moneys'][$form]['name'];
	$moneysuma = $this->config['moneys'][$form]['price'];
	
	$conn = new mysqli($mysqlhost, $mysqllogin, $mysqlpass, $mysqlbd);
	
	header("Location: /config/mysql.php?nickname={$nickname}&donatename={$donatename}&donatesuma={$donatesuma}&casename={$casename}&casesuma={$casesuma}&caseid={$caseid}&lastname={$donatename}&moneyname={$moneyname}&moneyamount={$moneyamount}&moneysuma={$moneysuma}&refkey={$refkey}");
  }
}

?>