<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'description' => "Hawaii's premier co-ed ultimate tournament",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament',
  'slider' => array(
    array(
      'uri' => 'images/ClayMcKell_DSC1822.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC1829.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC1838.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC2130.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC2137.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC2181.jpg',
    ),
    array(
      'uri' => 'images/ClayMcKell_DSC2339.jpg',
    )
  ),
  'fbscript' => true,
  'content' => '<div id="content">
          <section id="vitals" class="grid_5">
              <hgroup>
                  <h1>
                      Hopucalypse 2012
                  </h1>
              </hgroup>
              <dl>
                  <dt>Who:</dt>
                    <dd>You and up to 16 spirited co-ed teams.</dd>
                  <dt>What:</dt>
                    <dd>Two days on the field, one day at the beach.</dd>
                  <dt>When:</dt>
                    <dd>November 9-12, 2012</dd>
                  <dt>Where:</dt>
                    <dd><a href="http://www.google.com/maps?f=q&hl=en&q=+Kalanianaole+Hwy+%26+Ehukai+St,+waimanalo+hawaii&ie=UTF8&z=15&ll=21.33839,-157.70299&spn=0.026063,0.048966&om=1">Waimanalo Polo Fields</a>, Oahu, Hawai&#039i</dd>                    
                  <dt>Why:</dt>
                    <dd>It&#039s the end of the world!</dd>
              </dl>
          </section>
          <section id="facebook" class="grid_4">
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373" data-width="500" data-colorscheme="dark" data-show-faces="true" data-border-color="black" data-stream="true" data-header="true"></div>          </section>
          <section id="details" class="grid_7">
              <hgroup>
                  <h1>Bids & Registration Details</h1>
              </hgroup>
              <p>
              Candy canes cheesecake topping faworki halvah toffee chocolate gummies. Chocolate cake topping jujubes sweet faworki marzipan. Topping soufflé pudding pie lollipop. Gummi bears lemon drops tiramisu. Tart brownie cotton candy cookie. Bear claw sweet dragée jelly. Lollipop marzipan candy tiramisu marshmallow toffee chocolate cake. Bonbon cookie macaroon soufflé candy jujubes. Bonbon cotton candy cotton candy. Apple pie jelly beans topping lemon drops cotton candy halvah jujubes.
              </p>
              <p>
Liquorice bear claw pie marzipan tootsie roll donut jelly beans fruitcake bear claw. Danish gummi bears candy canes jelly beans ice cream toffee lollipop brownie. Cotton candy macaroon jelly-o marshmallow chocolate bar halvah dragée. Donut wypas lollipop jujubes. Jelly-o lollipop candy. Macaroon applicake soufflé cheesecake halvah gummies.
              </p>
              <p>
Tart bear claw chocolate cake brownie sesame snaps croissant jelly-o. Toffee jelly-o oat cake dragée icing. Sweet roll liquorice liquorice carrot cake chocolate bar faworki pudding. Tiramisu marshmallow cookie fruitcake biscuit tiramisu. Candy caramels liquorice applicake. Sweet donut wafer brownie tootsie roll bear claw apple pie.
              </p>
          </section>
          <section class="grid_4">
                <small>Hopu Ka Lewa is proudly sponsored by Savage Ultimate:</small>
              <a href="http://www.savageultimate.com/" target="_blank"><img src="images/SAVAGEultimateLogo-Square.jpg" title="Savage Ultimate Logo" alt="Hopu Ka Lewa is proudly sponsored by Savage Ultimate."/></a>
          </section>
		
      </div>'
);
$template->display($params);
?>