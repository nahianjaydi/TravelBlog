<?php

session_start();

$unauthorise_files = array("create_post.php", "dashboard.php","logout.php");
if(basename($_SERVER['SCRIPT_FILENAME'])){
  foreach($unauthorise_files as $file){
    if($file == basename($_SERVER['SCRIPT_FILENAME'])){
      if(!isset($_SESSION["is_looged_in"]) && $_SESSION["is_looged_in"] == false){
        header("Location: index.php");
        die();
      }
    }
  }
}

//Config file
require_once 'config.php';

require_once "helpers/system_helper.php";

//Class Autoloader
function __autoload($class_name){
  require_once 'lib/'.$class_name.'.php';
}

?>
