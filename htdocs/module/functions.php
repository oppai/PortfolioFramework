<?php

function execute(){
	// simple controller
	if(!isset($_GET['action'])) $_GET['action'] = 'default';
	$action = $_GET['action'].'Action';

	if(function_exists($action)){
		$action();
	}else{
		defaultAction();
	}
}

function table($val){
	if(!$val) echo 'table error';
	if(is_array($val)){
		echo '<table border="1" cellspacing="0" bordercolor="#333333" >';
		_table($val);
		echo '</table>';
	}else{
		echo var_dump($val);
	}
}
function _table($val){
	echo '<tr align="left" valign="top">'.chr(10);
	echo ' <td align="left" valign="top" bgcolor="#33EE33">key</td>'.chr(10);
	echo ' <td align="left" valign="top" bgcolor="#33EE33">value</td>'.chr(10);
	echo '</tr>'.chr(10);
	foreach($val as $key => $_val){
		echo '<tr align="left" valign="top">'.chr(10);
		echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.$key.'</td>'.chr(10);
		echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.chr(10);
		if(is_array($_val))	table($_val);
		else echo $_val.'</td>'.chr(10).'</tr>'.chr(10);
	}
}

function g($params){
	$res = array();
	foreach(explode('.', $params) as $val){
		$res[] = $val.'='.$_GET[$val];
	}
	return implode('&', $res);
}
