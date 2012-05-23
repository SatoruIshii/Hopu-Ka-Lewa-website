<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_pay.php');
date_default_timezone_set('Pacific/Honolulu');
$curdate = date('m-d-Y');
require 'model/dates.php';
$params = array(
  'pagetitle' => 'Pay Individual Fee',
  'description' => "Online payment for player registration for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player, pay, fee',
  'hosted_button_id' => false
  );
$template->display($params);
?>