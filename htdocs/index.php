<?php
require_once('config/config.php');

execute();

function defaultAction(){
  include_layout('inc_index.php');
}