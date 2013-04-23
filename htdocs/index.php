<?php
require_once('config/config.php');

execute();

function defaultAction(){
  if(isset($_GET['lang']) && file_exists('inc_index.'.$_GET['lang'].'.php')){
    include_layout('inc_index.'.$_GET['lang'].'.php');
  }else{
    include_layout('inc_index.php');
  }
}