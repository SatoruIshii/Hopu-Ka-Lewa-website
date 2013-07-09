<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
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
              <p>Every year, we keep the party going on the next weekend on an outer island where life is a bit slower and players get a chance to experience another island.</p>
            <p>
                Who: Anyone who wants some Big Island ultimate.
            </p>
            <p>
              What: Hat-draw style tournament that encourages meeting new people and spirited play.
            </p>
            <p>
              When: November 16-17, 2013.
            </p>
            <p>
              Where: Kamehameha Park in the town of Kapaau (North Kohala District, Hawaii Island).
            </p>
            <p>
              Hat-draw registration and fee are in the works.  We are currently working on securing campsites/lodging.  Stay tuned!
            </p>
          </section>
          <section id="hatdrawmap" class="grid_6">
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=215686218982924613873.000455b1ba1c743521a81&amp;msa=0&amp;ie=UTF8&amp;t=h&amp;ll=20.240133,-155.801497&amp;spn=0.028186,0.036478&amp;z=14&amp;iwloc=lyrftr:msid:215686218982924613873.000455b1ba1c743521a81,00047f45df01af638c6d1,,,0,-31&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msid=215686218982924613873.000455b1ba1c743521a81&amp;msa=0&amp;ie=UTF8&amp;t=h&amp;ll=20.240133,-155.801497&amp;spn=0.028186,0.036478&amp;z=14&amp;iwloc=lyrftr:msid:215686218982924613873.000455b1ba1c743521a81,00047f45df01af638c6d1,,,0,-31&amp;source=embed" style="color:#0000FF;text-align:left">Kohala Hawaii</a> in a larger map</small>
          </section>'
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