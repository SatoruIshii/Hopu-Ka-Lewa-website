<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Logistics',
  'description' => "Logistical information for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, logistics, travel, map',
  'content' => '    <hgroup class="grid_12">
                    <h1>
                        Hopu Ka Lewa 14 Logistics
                    </h1>
                    <h2>Tournament Details</h2>
                </hgroup>
                <section class="grid_4">
                    <h3>Kickoff</h3>
                    <p>Registration will occur at the Waimanalo Polo Fields on the evening of Friday, Nov. 9, 2012 between 3pm and 7pm.  Registration will also be available on Saturday morning between 6:30am and 8am.</p>
                    <p>On Friday night starting at 6pm, we will have dinner, the Opening Ceremony and Captains&#039s meeting.</p>
                    <p>The field is on the mauka (mountain) side of Kalanianaole Highway across from Bellows Beach.</p>
                </section>
                <section class="grid_4">
                    <h3>Games</h3>
                    <p>All games are played at the Waimanalo Polo Fields: 41-1062 Kalanianaole Highway, Waimanalo, Oahu.</p>
                    <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=41-1062+Kalanianaole+Hwy.&amp;sll=37.0625,-95.677068&amp;sspn=41.767874,79.013672&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=41-1062+Kalanianaole+Hwy,+Waimanalo,+Hawaii+96795&amp;ll=21.342467,-157.708912&amp;spn=0.023983,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=41-1062+Kalanianaole+Hwy.&amp;sll=37.0625,-95.677068&amp;sspn=41.767874,79.013672&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=41-1062+Kalanianaole+Hwy,+Waimanalo,+Hawaii+96795&amp;ll=21.342467,-157.708912&amp;spn=0.023983,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    <dl>
                        <dt>Saturday</dt><dd>Pool play games from 8am to (roughly) 5pm.</dd>
                        <dt>Sunday</dt><dd>Bracket play games from 8:30am to (roughly) 5pm.</dd>
                        <dt>Monday</dt><dd>Hat draw games on the beach (Waimanalo Bay Beach Park) starting at 10am.</dd>
                    </dl>
                </section>
                <section class="grid_4">
                    <h3>Food</h3>
                    <p>Breakfast and dinners will be provided for you at the fields.  Breakfast will be served from 6:30am to 8am and is mainly continental fare.  Dinner will be served at 6pm with second helpings starting no earlier than 7:15pm to ensure slow showerers get fed.</p>
                    <p>Lunch is on your own.  However, there will be a couple of local vendors at the fields for convenience, so bring money (they are usually cash-only).  Other options are in Waimanalo, a five-minute drive.</p>
                    <p>Entertainment will follow dinner on both Saturday and Sunday.</p>
                </section>
                <section class="grid_4">
                    <h3>Camping</h3>
                    <p>We have campsites reserved at Sherwoods (aka Waimanalo Bay Beach Park) right across the street!</p>
                    <p>Camping on the fields themselves is limited to Hopu committee and VIPs only.  <strong>All Others Will Be Kicked Out</strong>.  This is a Polo Fields rule, not ours, please understand.</p>
                </section>
                <hgroup class="grid_12">
                    <h2>Travel Details</h2>
                </hgroup>
                <section class="grid_5">
                <h3>Helpful Hints</h3>
                    <p>Rental cars are available at the airport.</p>
                    <p>If you prefer not to camp, rental options are available, but you are on your own to secure them. Search near/under "Waimanalo". Honolulu is a 45 minute drive.</p>
                    <p>If you need assistance with housing before or after the tournament, please contact us and we will try to find floor space, yard space, or direct you to great camping.</p>
                </section>
                <section class="grid_7">
                <h3>How do I get there?</h3>
                <dl>
                    <dt>By Plane</dt><dd>Fly into Honolulu International Airport (HNL). Just about every major airline serves HNL.</dd>
                    <dt>By Car</dt><dd>From the airport, Waikiki, or anywhere in Honolulu-get on H1 East. Take it until it ends! H1 turns into Kalanianaole Highway, which passes by Hawaii Kai, Hanauma Bay, Sandy Beach, Sea Life Park, and through Waimanalo. When you see the McDonald&#039s on your right, in Waimanalo, you&#039ve got less than a half-mile to go. The fields will be on your left; camping is at Waimanalo Bay Beach Park, on your right.</dd>
                    <dt>By Bus</dt><dd>We encourage ride-sharing with your fellow Hopu players.  Consider asking on the <a href="https://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373">Facebook page</a> if there are rides available.  Failing that, be advised that officially, no luggage is allowed on the bus, so pack light!  A bus fare is $2.50 each way and includes one transfer.  For schedules and maps, visit <a href="http://thebus.org/">TheBus</a>.  For real-time arrival information, check out <a href="http://www.allb.us/">Allb.us</a>.
                        <details>
                            <summary>From the airport</summary>
                            <p>Get on bus #19 or #20 heading towards Waikiki Beach and request a "transfer" when you board (other options for this first leg are available at certain times of the day). Get off at South King St. and Alakea (Stop ID 4400).  Cross South King, walk up Alakea a few meters (to Stop ID 743) and transfer to bus #57 heading towards "Kailua/Sea Life Park". Depending on the time of day, this bus ride is between 30 and 90 minutes after you transfer, so be patient!  Get off at the bus stop directly outside of the Waimanalo Polo Fields/Waimanalo Beach Recreation Area.</p>
                        </details>
                        <details>
                            <summary>From Waikiki</summary>
                            <p>Catch bus 58 heading towards "Hawaii Kai/Sea Life Park" from any of a number of bus stops on Kuhio Avenue. After a long (45 min or so) ride, get off in Waimanalo at the bus stop directly outside of the Waimanalo Polo Fields/Waimanalo Beach Recreation Area.</p>
                        </details>
                        </dd>
                </dl>
      </section>'
);
$template->display($params);
?>