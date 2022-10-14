<?php

class payment{
	
var $config;

function __construct ($config){
	$this->config = $config;
}

function send($nickname, $group, $case, $refkey){
	
	include './config.php';
	
	$donatename = $this->config['groups'][$group]['name'];
	$donatesuma = $this->config['groups'][$group]['price'];
	$casename = $this->config['cases'][$case]['name'];
	$casesuma = $this->config['cases'][$case]['price'];
	$caseid = $this->config['cases'][$case]['caseid'];
	
	$conn = new mysqli($mysqlhost,$mysqllogin,$mysqlpass,$mysqlbd);
	
	header("Location: /config/mysql.php?nickname={$nickname}&donatename={$donatename}&donatesuma={$donatesuma}&casename={$casename}&casesuma={$casesuma}&caseid={$caseid}&lastname={$donatename}&refkey={$refkey}");
  }
}

?>