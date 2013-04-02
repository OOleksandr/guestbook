<?php
	error_reporting(E_ALL);
	require_once "config/base.php";
	require_once "./config.php";
	$router=new View;
	$member=$router->Run();
	$member['init']=0;
	foreach ($member as $key => $value)
	{
		$$key= $value;
	}
	require_once "views/layout/main.tpl";
?>