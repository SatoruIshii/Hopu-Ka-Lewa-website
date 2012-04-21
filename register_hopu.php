<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Individual Registration',
  'description' => "Instructions for player registration for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player',
  'content' => '<div id="content" class="grid_12">
          <section id="individualreg">
              <hgroup>
                  <h1>
                      Hopu Ka Lewa 14 Individual Registration
                  </h1>
              </hgroup>
              Individual registration coming soon.
          </section>
          
		
      </div>'
);
$template->display($params);
?>