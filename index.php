<?php
	require_once ('vendor/autoload.php');
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);

	echo $twig->render('index.html', array('name'=>'Mi Web de proyecto'));
?>
