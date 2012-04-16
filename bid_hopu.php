<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Team Bid Registration',
  'description' => "Instructions for submitting a team bid to Hopu Ka Lewa 14.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid',
  'content' => '<div id="content" class="grid_12">
          <section id="teambid">
              <hgroup>
                  <h1>
                      Hopu Ka Lewa 14 Team Bid Processes
                  </h1>
              </hgroup>
              Bidding is open?
          </section>
          
		
      </div>'
);
$template->display($params);
?>