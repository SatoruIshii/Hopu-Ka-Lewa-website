<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template.phtml');
$params = array(
  'name' => 'Clay',
  'friends' => array(
    array(
      'firstname' => 'John',
      'lastname' => 'Smith'
    ),
    array(
      'firstname' => 'Dave',
      'lastname' => 'Black'
    )
  )
);
$template->display($params);
?>
