<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2014.php');
$params = array(
  'description' => "Hawaii's premier co-ed ultimate tournament",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament',
  'fbscript' => true,
  'content' => '<hgroup class="grid_12">
                  <h1>
                      Et Tu Hopu?
                  </h1>
              </hgroup>
              <section class="grid_5">
                <h2>Important Dates</h2>
                <dl>
                  <dt>July: Bid window opens</dt>
                    <dd>
                      Please submit your team bid via the <a href="bid_hopu.php">online form</a>.
                      Supplemental materials, such as video or other media, are <em>strongly</em> encouraged and can be emailed to the <a href="mailto:hoputd@hawaiiultimate.com">Tournament Directors</a>.
                      Show us what your team will contribute to the tournament and why you want to play in Hopu Ka Lewa 16.  
                      The more spirited your bid, the better your chances of getting to play!  
                      This tournament is all about sharing the Ohana experience with the community and getting to know each other.  
                      Creativity and artistic expression are strongly encouraged.
                    </dd>
                  <dt>August 11: Bid deadline</dt>
                    <dd>Please get your bids in before the deadline so the selection process can start.</dd>
                  <dt>August 25: Teams announced</dt>
                    <dd>All captains of teams who submitted bids will get emails notifying them of acceptance or otherwise.</dd>
                  <dt>September 5: Bid confirmation deadline</dt>
                    <dd>Captains must notify the TD or risk forfeiting their team\'s bid.</dd>
                  <dt>September 22: Skeleton registration deadline</dt>
                    <dd>We know how hard it is to get players to commit to travel and play.  
                      But we ask that your team have at least <em>8</em> players registered by this date in order for the committee to see tangible committement.
                      Your team bid covers 3 players already, so that is really only 5 more people to sign up!
                    </dd>
                  <dt>November 8-10: Et Tu Hopu</dt>
                    <dd>Get your Roman holiday on!</dd>
                </dl>
              </section>
              <section class="grid_7">
                <img src="images/mainslides/HenryHsieh2012-Sallys2012.jpg" width="960" alt="Sippin Sallys 2012 Boat Race Champions"> 
              </section>
              <section id="sponsors" class="grid_5">
                <h2>Sponsors</h2>
                <p>Hopu would like to thank our sponsors for their generous help.  Many mahalos to:</p>
                <h3>SAVAGEultimate</h3>
                <img src="images/SAVAGEultimateLogo-Square.jpg" />
                <p>
                  SAVAGEultimate was born out of yeti DNA in 2009.  
                  You don\'t have to ask yourself "do I look good?" because we know you look good. 
                  This allows you to concentrate on getting that layout d and getting the bookends. 
                  Knowing your jersey can take as much abuse as your body can handle, gives you an extra inch on your reach. 
                  We have designed our uniforms to be lighter than a cloud, stronger than Lou Ferrigno, and soft enough for angels to sleep in.
                </p>
                <p>
                  Having an in house seamstress allows for product development and customization in response to customer feedback, faster turnaround times, and quality assurance of the whole production of your jersey.
                </p>
                <p>
                  SAVAGEultimate is dedicated to making you look good on and off the field.
                </p>
                <h3>KateFarms</h3>
                <p>
                  KateFarms brings you Komplete: the world\'s first Ready-to-Drink Ultimate Meal Replacement Shake. 
                  Soy-Free, Dairy-Free, Gluten-Free, Flavor-Full. 
                  Plant-based protein delivers 17-19g with 21 super foods, all non-GMO. 
                  Taste how delicious healthy can be. Available at health food stores everywhere.
                </p>
                <img src="images/KF-logo.jpg" />
                <img src="images/komplete.png" />
              </section>
              <section id="facebook" class="grid_5">
            <div class="fb-like-box" data-href="https://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373" data-width="380" data-colorscheme="dark" data-show-faces="true" data-border-color="black" data-stream="true" data-header="true"></div>
          </section>'
);
//foreach($params['slider'] as $k => &$v) {
//  $temppath = str_replace('mainslides','mainslides/small',$v['uri']);
//  $v['uri_small'] = str_replace('.jpg', '-small.jpg', $temppath);
//}
$template->display($params);
?>
<?php 
/* stash:
 *   'slider' => array(
    array(
      'uri' => 'images/mainslides/ClayMcKell2010-_DSC1838.jpg'
    ),
    array(
      'uri' => 'images/mainslides/ClayMcKell2010-_DSC2130.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2007-749_4902.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2007-754_5476.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-IMG_1303.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-IMG_1428.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-IMG_2508.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-IMG_2746.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-_MG_7366.jpg'
    ),
    array(
      'uri' => 'images/mainslides/KavehKardan2012-_MG_7834.jpg'
    ),
    array(
      'uri' => 'images/mainslides/HenryHsieh2012-2011finalsmen.jpg'
    ),
    array(
      'uri' => 'images/mainslides/HenryHsieh2012-2011finalswomen.jpg'
    )
  ),
 * content stuff
 * <section id="vitals" class="grid_7">
              <dl>
                  <dt>Who:</dt>
                    <dd>You and about 360 other survivors</dd>
                  <dt>What:</dt>
                    <dd>Two days on the field, one day at the beach</dd>
                  <dt>When:</dt>
                    <dd>November 9-12, 2012
                    </dd>
                  <dt>Where:</dt>
                    <dd><a href="http://maps.google.com/maps?q=41-1062+Kalanianaole+Hwy.+Waimanalo,+HI+96795&hnear=41-1062+Kalanianaole+Hwy,+Waimanalo,+Hawaii+96795&gl=us&t=h&z=16">Waimanalo Polo Fields</a>, Oahu, Hawai&#039i</dd>                    
                  <dt>Why:</dt>
                    <dd>It&#039s the end of the world!</dd>
              </dl>
              <p>
                Need more details?  Check with <a href="logistics.php">Logistics</a>.
              </p>
              <p>
                Get your <a href="bid_hopu.php">team bids</a> in by Aug. 17!
              </p>
          </section>
          
          <section id="details" class="grid_8">
              <h2>Bids & Registration Summary</h2>
                <dl>
                    <dt>Team Bid Deadline</dt>
                        <dd>Team bids due on Aug. 17, 2012.</dd>
                    <dt>Team Bid Deposits</dt>
                        <dd>$360, which is credited towards three individual registration fees.  Your bid application is not complete until your deposit has been received.</dd>
                    <dt>Individual Registration Fees:</dt>
                        <dd><dl>
                            <dt>Early-bird Fee:</dt><dd>$120 mailed or paid online before Sept. 30, 2012.</dd>
                            <dt>Late Registration Fee:</dt><dd>$142 mailed or paid between Oct. 1 and Oct. 28, 2012.</dd>
                            <dt>Shame-on-you Late Registration</dt><dd>$159 paid online by Nov. 2 or cash or check on the fields on Nov. 9, 2012.</dd>
                        </dl></dd>
                    <dt>Guest Registration Fees:</dt>
                        <dd><dl>
                            <dt>Daily:</dt><dd>$20 (Does not include player&#039s pack, camping permit, nor breakfast).</dd>
                            <dt>Weekend:</dt><dd>$70 (Includes breakfasts, dinners, drinks, camping permit, player&#039s pack, and entertainment).</dd>
                        </dl></dd>
                </dl>
            <h2>Refunds</h2>
                <ul>
                    <li>Partial refund of team deposit must be requested on or before Sept. 28, 2012.</li>
                    <li>Full individual player refunds must be requested on or before Sept. 28, 2012.</li>
                    <li>Partial individual player refunds can be requested up until Nov. 2, 2012.</li>
                </ul>
<p>
              
          </section>
          <section class="grid_4">
					<p>
                <small>Hopu Ka Lewa is proudly sponsored by Savage Ultimate:</small>
              <a href="http://www.savageultimate.com/" target="_blank"><img src="images/SAVAGEultimateLogo-Square.jpg" style="background:white;" title="Savage Ultimate Logo" alt="Hopu Ka Lewa is proudly sponsored by Savage Ultimate."/></a>
					</p>
					<p>
						<small>Even the CDC is in on the Hopucalypse</small>
						<a    href="http://www.cdc.gov/phpr/zombies.htm"    title="Get A Kit, Make A Plan, Be Prepared.    emergency.cdc.gov"><img src="http://www.cdc.gov/images/campaigns/emergency/zombies1_300x250.jpg"    style="width:300px; height:250px; border:0px;" alt="Get A Kit,    Make A Plan, Be Prepared. emergency.cdc.gov" /></a>
				  </p>
          </section>
 */