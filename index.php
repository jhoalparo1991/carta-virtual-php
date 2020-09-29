<?php 
	session_cache_expire(31536000);
	session_start();
	require_once './core/app.php';
	require_once './core/config.php';
	require_once './core/database.php';
	require_once './core/views.php';
	require_once './core/controller.php';
	
	$app = new App();





 ?>