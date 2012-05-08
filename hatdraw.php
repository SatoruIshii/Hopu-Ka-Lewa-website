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
  'content' => '<hgroup class="grid_12">
                  <h1>
                      Post-Hopu Ka Lewa Hat Draw
                  </h1>
              </hgroup>
              <section id="hatdraw">
              <p>Every year, we keep the party going on the next weekend on an outer island where life is a bit slower and players get a chance to experience another island.</p>
              <dl>
                <dt>Who</dt><dd>Anyone and everyone.  Participation in Hopu Ka Lewa is not required.</dd>
                <dt>What</dt><dd>All-day hat draw and party</dd>
                <dt>Where</dt><dd>Maui, the Valley Isle</dd>
                <dt>When</dt><dd>Nov. 17-18, 2012</dd>
                <dt>Why</dt><dd>Each island has it&#039s own beauty and appeal.  Might as well fit in another ultimate tournament while you are hopping</dd>
            </dl>
            <p>
                More details to come.
            </p>
            <p>
                We can say that there is usually complimentary camping that goes with the Hat Draw.  Many people find it more convenient to rent a car on outer islands.  Please keep this in mind when budgeting your trip.
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