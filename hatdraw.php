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
                      Post-Hopu Hat Draw
                  </h1>
              </hgroup>
              <section id="hatdraw" class="grid_6">
              <h2>Vitals</h2>
              Every year, we keep the party going on the next weekend on an outer island where life is a bit slower and players get a chance to experience another island.
            <dl>
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
                <p>
                  Monday morning continental breakfast included.
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
              Hat-draw registration and fee are in the works.  We are currently working on securing campsites/lodging.  Stay tuned!
            </p>
          </section>
          <section id="hatdrawmap" class="grid_6">
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
            
          </section>',
  'slider' => array(
    array(
      'uri' => 'images/hatdraw/86spencertrees2-small.jpg'
    ),
    array(
      'uri' => 'images/hatdraw/spencer1206_07c4.jpg'
    )
  )
);
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
 */
?>