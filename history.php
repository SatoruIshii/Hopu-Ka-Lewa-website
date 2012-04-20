<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'History',
  'description' => "History of Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, history, spirit, tradition',
  'content' => '<div id="content">
          <hgroup>
              <h1>
                  Hopu Ka Lewa History
              </h1>
          </hgroup>
          <section id="teamhistory" class="grid_12">
              <table id="history_table">
<caption>Past Hopu Ka Lewa Winners</caption>
<tr>
 <th>Year</th><th>Champions</th><th>Boat Race Winners</th>
 <th>Penultimate Winners</th><th>Beer Bracket Winners</th>
 <th>Spirit Team</th><th>Spirit Players</th>
</tr>
<tr class=odd><td>2007</td><td>Hana Hou</td><td>Swingers & Dumpers</td>
 <td>&nbsp;</td><td>&nbsp;</td>
 <td>Swing of Fire</td><td>&nbsp;</td></tr>
<tr class=even><td>2006b</td><td>Hana Hou</td><td>Swing of Fire</td>
 <td>BTP (California)</td><td>&nbsp;</td>
 <td>Pirates</td><td>Ari and Chris</td></tr>
<tr class=odd><td>2006a</td><td>Three Hour Tour</td><td>Three Hour Tour</td>
 <td>&nbsp;</td><td>&nbsp;</td>
 <td>Swing of Fire</td><td>Georgia Hart</td></tr>
<tr class=even><td>2005</td><td>Hana Hou</td><td>Three Hour Tour</td>
 <td>Jabouti</td><td>Swingers & Dumpers</td>
 <td>&nbsp;</td><td>&nbsp;</td></tr>
<tr class=odd><td>2004</td><td>Hana Hou</td><td>Three Hour Tour</td>
 <td>Forcing Zen</td><td>Spirit Team</td>
 <td>Shock-N-Awesome</td><td>Brian G. and Joe Paradis</td></tr>
<tr class=even><td>2003</td><td>Diego En Fuego</td><td>Swingers & Dumpers</td>
 <td>Lei My Chaminade</td><td>Maui Mana</td>
 <td>Swingers & Dumpers</td><td>Heather Mitchell and Mondo Chun</td></tr>
<tr class=odd><td>2002</td><td>Hana Hou</td><td>Swingers & Dumpers</td>
 <td>ZenDisc</td><td>Spirit Team</td>
 <td>Chaminade</td><td>too many to write on trophy</td></tr>
<tr class=even><td>2001</td><td>Sugar Smacks</td><td>Swingers & Dumpers</td>
 <td>Oregon Fighting Sheep</td><td>&nbsp;</td>
 <td>Oregon Fighting Sheep</td><td>Mike Elhoff and Don Najita</td></tr>
<tr class=odd><td>2000</td><td>Sugar Smacks</td><td>Swingers & Dumpers</td>
 <td>&nbsp;</td><td>&nbsp;</td>
 <td>ZenDisc</td><td>Mondo Chun</td></tr>
</table>
          </section>
          <section id="adminhistory"class="grid_12">
              <table id="history_table">
<caption>Past Hopu Ka Lewa Details</caption>
<tr>
 <th>Year</th><th>Hat-Draw Location</th><th>Tournament Director</th>
 <th>Tournament Committee</th>
</tr>
<tr class=odd><td>2007</td><td>Hawi, Big Island</td><td>Larua Gilda</td>
 <td>Kevin Kelly, Ari Patz, Katelyn Allers, Jason Sickmiller, Megan Grimshaw</td></tr>
<tr class=even><td>2006b</td><td>&nbsp;</td><td>Aaron Rosa</td>
 <td>Kevin Kelly, Laura Gilda, Eric DeRuyeter, Jason Sickmiller,
Kevin McGraw</td></tr>
<tr class=odd><td>2006a</td><td>Waimea Kaua&#039i</td><td>Kevin Kelly</td>
 <td>Laura Gilda, Aaron Rosa, Eric DeRuyeter, Frances Ajo, Jason
Sickmiller</td></tr>
<tr class=even><td>2005</td><td>Kaunakakai (One-ali&#039i Park),
Moloka&#039i</td><td>Laura Gilda</td>
 <td>Rebecca Eldredge, Sara Simmons, Heather Mitchell, Kevin
Kelly, Frank Dabrosky, Jason Sickmiller</td></tr>
<tr class=odd><td>2004</td><td>Hana, Maui</td><td>Dave Strang</td>
 <td>Laura Gilda, Rebecca Eldredge, Sara Simmons, Heather
Mitchell, Kevin Kelly, Nate Adams</td></tr>
<tr class=even><td>2003</td><td>&nbsp;</td><td>Ignacio Lobos</td>
 <td>Rebecca Eldredge, Chris Johnson, Leilani Durand, Sara
Simmons, Karen Brimacombe, Carolyn Garvey, Bartlett Durand, Laura
Gilda</td></tr>
<tr class=odd><td>2002</td><td>&nbsp;</td><td>Ignacio Lobos</td>
 <td>Rebecca Eldredge, Chris Johnson, Leilani Durand, Jim Teo,
Karen Brimacombe, Ramzi Mirshak</td></tr>
<tr class=even><td>2001</td><td>Hanalei, Kaua&#039i</td><td>Ignacio
Lobos</td>
 <td>Scott Todd, Rebecca Eldredge, Chris Johnson, Leilani Durand,
Jim Teo, Laura Gilda, Jacqui Ford</td></tr>
<tr class=odd><td>2000</td><td>Hilo, Big Island</td><td>Corey
Tyrrell</td>
 <td>Michael Constantinides, Helga Mispelblom Beyer, Ignacio
Lobos, Julie Najita, Rick Needham, Scott Todd</td></tr>
</table>
          </section>
          <section id="historynarrative" class="grid_12">
              <hgroup>
                  <h1>History of Hopu Ka Lewa</h1>
                  <h2>By Ignacio Lobos</h2>
              </hgroup>
              <p>
            Late in 1999, somewhere far from the concrete jungle of Waikiki,
            a bunch of Honolulu Ultimate players high on too many cups of
            Kona Gold coffee decided it would be a great idea to have a
            relaxed, spirited coed tournament on the island of Oahu.
              </p>
            <p>
            Surely, we thought, palm trees, plenty of sunshine and the
            brilliant blue waters of Hawaii would be enough to attract
            hundreds, if not thousands of teams to our little corner of the
            world. Already, Oahu was known for its successful Kaimana
            Klassik, a competitive tournament held by the Hawaii Ultimate
            League Association (HULA) for the last 14 years. The Klassik was
            turning teams away. And, so we thought, we would be saddled by
            the same problem.
            </p>
            <p>
            Our first lesson in humility came on February 2000, when only one
            team had entered a bid. Eyebrows were raised, noses twitched in
            discomfort, and some grumbling was heard in the room as we
            pondered whether Hopu would turn from a dream into
            disappointment. Yet, this little group of disc players wasn&#039t
            about to give up.
            </p>
            <p>
            We pushed on, perhaps crazily, some might say. By April, nine
            teams had signed on, with 130 players joining our party. For our
            small Ultimate community in Oahu, it was quite a feat. We had
            teams from California, Minnesota and Virginia. Yet, without local
            players, the tournament would never have happened. So, our first
            thanks go to them, and to those who came from very far to join us
            for the love of the game.
            </p>
            <p>
            In 2003, after four successful tournaments, Hopu took another big
            step. The HULA community voted to take Hopu under its wing and
            make it an official HULA tournament. We believe this move will
            ensure the continued success of the tourney.
            </p>
            <p>
            Much mahalo and aloha should go to the first organizing Hopu
            Committee, which got this thing started. Corey Tyrrell was the
            tournament¹s first director, and the main thrust behind the idea
            of a coed tourney on Oahu. Joining him and keeping things running
smoothly were Julie Najita, Michael Constantinides, Rick Needham,
Helga Mispelblom Beyer, Ignacio Lobos and Scott Todd. 
          </section>
		
      </div>'
);
$template->display($params);
?>