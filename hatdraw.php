<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
date_default_timezone_set('Pacific/Honolulu');
$curdate = date('m-d-Y');
require 'model/dates.php';
$template = $twig->loadTemplate('hopu_template_2014.php');
$content = <<<CONTENT
<hgroup class="grid_12">
    <h1>
        Hopu Hat Draw
    </h1>
    <div align="center"> (TBA)</div>
</hgroup>
<!--
<div class="clearfix"></div>
<section id="hatdraw">
  <article class="grid_6">
    <h2>
      Vitals
    </h2>
    Every year, we keep the party going on the next weekend on an outer island where life is a bit slower and players get a chance to experience another island.
    <p>
      This year's post-Hopu Hat Draw will be in beautiful Hanalei, Kauai.
    </p>
    <p>
      Games will be held on the Hanalei Soccer fields. 
      Meet at 8:30am on Saturday.
      Registration is $60 and that includes a disc, local beer, a delectable dinner and fantastic prizes!  
    </p>
    <p>
      Party location: Kalihiwai Ridge about 2 miles up Kahiliholo Road.
    </p>
    <p>
      Brought to you by Kauai Ultimate and the <a href="mailto:rippeddisc@gmail.com">Finest Feinberg</a> on the island.
    </p>
  </article>
  <article class="grid_6">
    <h2>
      Housing
    </h2>
    <p>
      The Hanalei Inn is across the street and is renting for $149/$159 (for 3 days but she can do a bit of a discount for longer stays).
    </p>
    <p>
      Please contact <a href="mailto:rippeddisc@gmail.com">Aaron</a> for information about accomodations at/near the party site on Saturday night.
    </p>
    <p>
      Camping permits for Hanalei are NOT available online but can be picked up at one of 4 locations on Kauai at strange times.  
      Hanalei Blackpot Beachpark only allows camping on Friday and Saturday nights. 
      Camping fees for Hanelei Blackpot Beachpark are $3 per adult per night.   
      It also says online that they only accept money orders for camping fees (try email or call them to see if they will take cash).
    </p>
    <p>
      For more stone-age information please visit the <a href="http://www.kauai.gov/government/departments/parksrecreation/campinginformation/tabid/176/default.aspx">Kauai County Parks and Rec page</a> or send them a carrier pigeon.
    </p>
  </article>
  <article class="grid_12" id="hatreg">
    <h2>
      Registration
    </h2>
    To register, please complete the form and use the PayPal button below to send your $60 to the Hat Draw TD, Aaron Feinberg.
    <p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</section>
-->
CONTENT;
$params = array(
  'googleform' => array(
    'active' => true,
	'id' => 'hatdrawreg',
	'src' => "",
	'height' => '1px'
  ),
  'pagetitle' => 'Hat Draw',
  'description' => 'Outer island hat draw tournament.',
  'keywords' => 'Hawaii, ultimate, outer island, neighbor island, frisbee, ultimate frisbee, coed, hat, hat draw',
  'content' => $content,
  'slider' => array(
  array(
      'uri' => 'images/hatdraw/kamehamehastatue.jpg'
    ),
	array(
      'uri' => 'images/hatdraw/kohalatown.jpg'
    ),
	array(
      'uri' => 'images/hatdraw/86spencertrees2-small.jpg'
    ),
	array(
      'uri' => 'images/hatdraw/spencers_camping.jpg'
    ),
	array(
      'uri' => 'images/hatdraw/spencers_large.jpg'
    ),
	array(
      'uri' => 'images/hatdraw/kampark.jpg'
    ),
    array(
      'uri' => 'images/hatdraw/86spencertrees2-small.jpg'
    ),
    array(
      'uri' => 'images/hatdraw/spencer1206_07c4.jpg'
    )
  )
);
unset($params['slider']);
//if ( $curdate < $dates['online_payment']){
//  $delimiter = "</hgroup>";
//  $splitcontent = explode($delimiter, $params['content']);
//  $params['content'] = $splitcontent[0] . $delimiter . $paymentcontent . $splitcontent[1];
//};
$template->display($params);
?>
