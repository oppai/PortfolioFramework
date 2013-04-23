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

function include_layout($layout){?>
<html>
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<?php //TODO:自動的にCSSやJS、を読み込む仕組み ?>
	</head>
	<body>
<?php include($layout); ?>
	</body>
</html>
<?php
}
?>
