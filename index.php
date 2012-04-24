<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
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
                  <dt>What:</dt>
                    <dd>Two days on the field, one day at the beach.</dd>
                  <dt>When:</dt>
                    <dd>November 9-12, 2012.  Important details:
                        <dl>
                            <dt>Friday, Nov. 9: 2-7pm</dt>
                                <dd><ul>
                                    <li>Player check-in</li>
                                    <li>8pm Spirit Circle</li>
                                    <li>Captains Meeting following Spirit Circle</li>
                                </ul></dd>
                            <dt>Saturday, Nov. 10: 8am - 5pm</dt>
                                <dd>Pool play on grass fields</dd>
                            <dt>Sunday, Nov. 11: 9am - 5pm</dt>
                                <dd><ul>
                                    <li>Bracket play on grass fields</li>
                                    <li>9pm Award ceremony</li>
                                </ul></dd>
                            <dt>Monday, Nov. 12: 10am</dt>
                                <dd>Beach hat draw at Waimanalo Bay</dd>
                            <dt>Saturday - Sunday Nov. 17-18</dt>
                                <dd>Post-Hopu Hat Draw on Maui</dd>
                        </dl>
                    </dd>
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
                  <h1>Bids & Registration Summary</h1>
              </hgroup>
                <dl>
                    <dt>Team Bid Deadline</dt>
                        <dd>Team bids due on Aug. 17, 2012.</dd>
                    <dt>Team Bid Deposits</dt>
                        <dd>$360, which is credited towards three individual registration fees.  Your bid application is not complete until your deposit has been received.</dd>
                    <dt>Individual Registration Fees:</dt>
                        <dd><dl>
                            <dt>Early-bird Fee:</dt><dd>$120 mailed or paid online before Sept. 30, 2012.</dd>
                            <dt>Late Registration Fee:</dt><dd>$142 mailed or paid between Oct. 1 and Oct. 28, 3012</dd>
                            <dt>Shame-on-you Late Registration</dt><dd>$159 paid online by Nov. 2 or cash or check on the fields on Nov. 9, 2012.</dd>
                        </dl></dd>
                    <dt>Guest Registration Fees:</dt>
                        <dd><dl>
                            <dt>Daily:</dt><dd>$20 (Does not include players packet, camping permit, nor breakfast)</dd>
                            <dt>Weekend:</dt><dd>$70 (Includes breakfasts, dinners, drinks, camping permit, player&#039s pack, and entertainment)</dd>
                        </dl></dd>
                </dl>
               <hgroup>
                <h1>Refunds</h1>
               </hgroup>
                <ul>
                    <li>Partial refund of team deposit must be requested on or before Sept. 28, 2012.</li>
                    <li>Full individual player refunds must be requested on or before Sept. 28, 2012.</li>
                    <li>Partial individual player refunds can be requested up until Nov. 2, 2012.</li>
                </ul>
<p>
              
          </section>
          <section class="grid_4">
                <small>Hopu Ka Lewa is proudly sponsored by Savage Ultimate:</small>
              <a href="http://www.savageultimate.com/" target="_blank"><img src="images/SAVAGEultimateLogo-Square.jpg" title="Savage Ultimate Logo" alt="Hopu Ka Lewa is proudly sponsored by Savage Ultimate."/></a>
          </section>
		
      </div>'
);
$template->display($params);
?>