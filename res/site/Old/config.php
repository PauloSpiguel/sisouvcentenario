<?php
//Configuração de abertura de sessão na página
session_start();
$_SESSION['os'] = PHP_OS_FAMILY;
$_SESSION['ip'] = $_SERVER["REMOTE_ADDR"];
$_SESSION["desktop"] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$_SESSION["browser"] = $_SERVER['HTTP_USER_AGENT'];

//IMPORTAÇÃO DA CLASSES
spl_autoload_register(function($class_name){

	$filename = "class".DIRECTORY_SEPARATOR.$class_name. ".php";

	if (file_exists($filename)){
		require_once($filename);
	}

});


?>

