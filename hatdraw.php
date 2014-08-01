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
        Post-Hopu Hat Draw
    </h1>
</hgroup>
<section id="hatdraw" class="grid_6">
    <h2>Vitals</h2>
    Every year, we keep the party going on the next weekend on an outer island where life is a bit slower and players get a chance to experience another island.
    <p>
        Questions and concerns can be directed toward the <a href="mailto:bigislandstay@gmail.com">Hat Draw Organizer, PJ</a>.
    </p>
</section>
CONTENT;
$params = array(
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
$paymentcontent = '
<section id="hatdraw_pay" class="grid_12">
                <h2>Registration Now Open!</h2>
				<p>
					If you have problems registering, please contact <a href="mailto:bigislandstay@gmail.com">PJ</a>.
				</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <table style="margin-bottom:12px">
                  <tr><td><input type="hidden" name="on0" value="Registration prices">Registration prices</td></tr><tr><td><select name="os0">
                      <option value="Late Registration - after 10/31">Late Registration - after 10/31 $60.00 USD</option>
                  </select> </td></tr>
                  <tr><td><input type="hidden" name="on1" value="Gender">Gender</td></tr><tr><td><select name="os1">
                      <option value="Male">Male </option>
                      <option value="Female">Female </option>
                  </select> </td></tr>
                  <tr><td><input type="hidden" name="on2" value="Shirt Size">Shirt Size</td></tr><tr><td><select name="os2">
                      <option value="Mens small">Mens small </option>
                      <option value="Mens Medium">Mens Medium </option>
                      <option value="Mens Large">Mens Large </option>
                      <option value="Mens X large">Mens X large </option>
                  </select> </td></tr>
                  <tr><td><input type="hidden" name="on3" value="Level of experience">Level of experience</td></tr><tr><td><select name="os3">
                      <option value="1- Beginner">1- Beginner </option>
                      <option value="2- Avg. Beginner or out of shape">2- Avg. Beginner or out of shape </option>
                      <option value="3- Athletic and skills">3- Athletic and skills </option>
                      <option value="4- Advanced">4- Advanced </option>
                      <option value="5- Very advanced">5- Very advanced </option>
                  </select> </td></tr>
                  <tr><td><input type="hidden" name="on4" value="Handler">Handler</td></tr><tr><td><select name="os4">
                      <option value="yes">yes </option>
                      <option value="no">no </option>
                  </select> </td></tr>
                  </table>
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                  ">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </section>
';
//if ( $curdate < $dates['online_payment']){
//  $delimiter = "</hgroup>";
//  $splitcontent = explode($delimiter, $params['content']);
//  $params['content'] = $splitcontent[0] . $delimiter . $paymentcontent . $splitcontent[1];
//};
$template->display($params);
?>
<?php
/* stash
 * <dl>
                <dt>Who</dt><dd>Anyone and everyone.  Participation in Hopu Ka Lewa is not required.</dd>
                <dt>What</dt><dd>All-day hat draw and party</dd>
                <dt>Where</dt><dd>Maui, the Valley Isle</dd>
                <dt>When</dt><dd>Nov. 17-18, 2012</dd>
                <dt>Why</dt><dd>Each island has it&#039s own beauty and appeal.  Might as well fit in another ultimate tournament while you are hopping</dd>
            </dl>
 * 
 * <p>
                Much like Hopu itself, tent camping is included in the Maui Hat Draw.  Many people find it more convenient to rent a car on outer islands.  Please keep this in mind when budgeting your trip.
            </p>
 * 
 * Stash from 2013:
 * <dl>
    <dt>Who</dt>
    <dd>
      Anyone who wants some Big Island ultimate.
    </dd>
    <dt>What</dt>
    <dd>
      A weekend jam-packed with fun:
      <p>
        Friday night dinner and (almost) full moon beach ultimate.
      </p>
      <p>
        Hat draw ultimate games on Saturday and Sunday.
      </p>
      <p>
        Saturday night party with nice dinner and entertainment.  Think fire spinning, and DJ/band/both!  We have the Big Pavilion reserved and it is great for dancing.
      </p>
    </dd>
    <dt>When</dt>
    <dd>
      November 16-17, 2013.
    </dd>
    <dt>Where</dt>
    <dd>
      Kamehameha Park in the town of Kapaau (North Kohala District, Hawaii Island).
    </dd>
</dl>
<p>
Hat-draw registration will be available August 31.  The regular fee will be $45 between August 31 and October 31.  After this, the fee will be $60.
</p>
 * 
 * <section id="hatdrawmap" class="grid_6">
<h2>Maps</h2>
<h3>Fields</h3>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=215686218982924613873.000455b1ba1c743521a81&amp;msa=0&amp;ie=UTF8&amp;t=h&amp;ll=20.240133,-155.801497&amp;spn=0.028186,0.036478&amp;z=14&amp;iwloc=lyrftr:msid:215686218982924613873.000455b1ba1c743521a81,00047f45df01af638c6d1,,,0,-31&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msid=215686218982924613873.000455b1ba1c743521a81&amp;msa=0&amp;ie=UTF8&amp;t=h&amp;ll=20.240133,-155.801497&amp;spn=0.028186,0.036478&amp;z=14&amp;iwloc=lyrftr:msid:215686218982924613873.000455b1ba1c743521a81,00047f45df01af638c6d1,,,0,-31&amp;source=embed" style="color:#0000FF;text-align:left">Kohala Hawaii</a> in a larger map</small>
<h3>Camping</h3>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=Kona+International+Airport,+Kailua,+HI&amp;daddr=Samuel+M.+Spencer+Beach+Park,+Waimea,+HI&amp;hl=en&amp;sll=20.128305,-155.810974&amp;sspn=0.413257,0.683899&amp;geocode=FcIoLQEdmgWz9iE3WT-7DL8YqynT5_8BfQ1UeTE3WT-7DL8Yqw%3BFSqIMQEdDli29iHuesZhwFf43SnlY50QxYBTeTHuesZhwFf43Q&amp;oq=spencers&amp;t=h&amp;mra=ls&amp;ie=UTF8&amp;ll=19.8791,-155.926208&amp;spn=0.45201,0.583649&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?saddr=Kona+International+Airport,+Kailua,+HI&amp;daddr=Samuel+M.+Spencer+Beach+Park,+Waimea,+HI&amp;hl=en&amp;sll=20.128305,-155.810974&amp;sspn=0.413257,0.683899&amp;geocode=FcIoLQEdmgWz9iE3WT-7DL8YqynT5_8BfQ1UeTE3WT-7DL8Yqw%3BFSqIMQEdDli29iHuesZhwFf43SnlY50QxYBTeTHuesZhwFf43Q&amp;oq=spencers&amp;t=h&amp;mra=ls&amp;ie=UTF8&amp;ll=19.8791,-155.926208&amp;spn=0.45201,0.583649&amp;z=10&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</section>
<section id="hatdrawlogistics" class="grid_6">
<h2>Logistics</h2>
<p>
At the campground, security comes by at 9pm to check for our safety and then locks the main gate so no leaving or arriving after 9pm.
</p>
<p>
Players should fly into Kona airport (KOA).
</p>

</section>
 */
?>
