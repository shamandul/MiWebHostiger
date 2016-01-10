<?php
/*
 * Autor:Jesús de Serdio
 */
	require_once ('vendor/autoload.php');
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);

	echo $twig->render('android.html', array('name'=>'Proyectos Android'));
?>