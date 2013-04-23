<?php
function include_layout($layout){?>
<html>
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<?php
	import_css();
	import_javascript();
?>
	</head>
	<body>
<?php include($layout); ?>
	</body>
</html>
<?php
}
function import_css(){
  $dir = dir(getcwd().'/asset/css/');
  while( $list = $dir->read() ){
    if($list !== '.' && !$list !== '..'){
      if(pathinfo($list,PATHINFO_EXTENSION) === 'css'){
        echo '		<style type="text/css" src="'.base_url().'asset/css/'.pathinfo($list,PATHINFO_BASENAME).'" /></style>'.chr(10);
      }
    }
  }
}
function import_javascript(){
  $dir = dir(getcwd().'/asset/js/');
  while( $list = $dir->read() ){
    if($list !== '.' && !$list !== '..'){
      if(pathinfo($list,PATHINFO_EXTENSION) === 'js'){
        echo '		<script type="text/javascript" src="'.base_url().'asset/js/'.pathinfo($list,PATHINFO_BASENAME).'" ></script>'.chr(10);
      }
    }
  }
}
function base_url(){
	global $config;
	return $config['BASE_URL'];
}
