<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_pay.php');
date_default_timezone_set('Pacific/Honolulu');
$curdate = date('m-d-Y');
require 'model/dates.php';
$params = array(
  'pagetitle' => 'Pay Team Bid',
  'description' => "Online payment for a team bid to Hopu Ka Lewa 14.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid, pay'
  );
if ( $curdate <= $dates['bid_deadline'] ){
  $params['hosted_button_id'] = '563799WLT7CQL';
}
else {
  $params['hosted_button_id'] = false;
  $params['reg_closed_content'] = 'Sorry, the team bid submission deadline has closed.  Please email the <a href="mailto:hopu@hawaiiultimate.com">Tournament Director</a> with any questions.';
}
$template->display($params);
?>