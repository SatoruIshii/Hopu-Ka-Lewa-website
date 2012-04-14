<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Hat Draw',
  'description' => 'Outer island hat draw tournament.',
  'keywords' => 'Hawaii, ultimate, outer island, neighbor island, frisbee, ultimate frisbee, coed, hat, hat draw',
  'content' => '<section id="hatdraw">
              <hgroup>
                  <h1>
                      Hopu Hat Draw Title
                  </h1>
              </hgroup>
              <p>
                  Tell me more!
              </p>
          </section>' //,
//  'slider' => array(
//    array(
//      'uri' => 'images/ClayMcKell_DSC1829.jpg',
//      'href' => 'http://ee.hawaii.edu/~mckell',
//      'caption' => 'Ballin'
//    )
//  )
);
$template->display($params);
?>