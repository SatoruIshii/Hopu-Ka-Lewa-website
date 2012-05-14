<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_pay.php');
$params = array(
  'pagetitle' => 'Pay Team Bid',
  'description' => "",
  'keywords' => '',
  'hosted_button_id' => '563799WLT7CQL'
  );
$template->display($params);
?>