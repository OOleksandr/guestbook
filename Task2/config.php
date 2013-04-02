<?php

 function __autoload ($class_name)
 {
    $path=str_replace("_", "/", $class_name);
    include_once($path .".php");	
 }
 
?>
