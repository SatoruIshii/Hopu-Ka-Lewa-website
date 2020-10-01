<?php 
// 404.php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/cache',
));
$template = $twig->loadTemplate('hopu_template_2013.php');
$params = array(
	'description' => "File not found.",
	'keywords' => "404",
	'content' => '<hgroup class="grid_12">
					<h1>
						You just got 404\'d, Bro
					</h1>
					<h2>
						The page you were looking for has been raptured.
					</h2>
					<p>
						Please consider returning to the <a href="/">home page</a> and trying again.
					</p>
				</hgroup>'
);
$template->display($params);
?>
