<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2013.php');
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
                More details can be found on <a href="https://sites.google.com/a/mauiultimate.com/website/hat-draw-2011?pli=1">Maui Ultimate\'s</a> page.
            </p>
            <p>
                Much like Hopu itself, tent camping is included in the Maui Hat Draw.  Many people find it more convenient to rent a car on outer islands.  Please keep this in mind when budgeting your trip.
            </p>
          </section>'
);
$template->display($params);
?>