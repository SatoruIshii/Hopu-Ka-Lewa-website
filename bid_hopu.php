<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2013.php');
date_default_timezone_set('Pacific/Honolulu');
$curdate = date('m-d-Y');
require 'model/dates.php';
$params = array(
  'pagetitle' => 'Team Bid Registration',
  'description' => "Instructions for submitting a team bid to Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid',
  'googleform' => array(
    'active' => false, //$curdate <= $dates['bid_deadline'],
    'id' => 'teambidapp',
    'src' => 'https://docs.google.com/spreadsheet/embeddedform?formkey=dHp4N19IRFV0bEFBbHItRkkwN0ZGWHc6MQ',
    'height' => '1594px'
  ),
  'content' => '<hgroup class="grid_12">
                    <h1>
                        Team Bid Processes
                    </h1>
                </hgroup>
                <section id="caveats" class="grid_12">
                  <h2>
                    Caveats
                  </h2>
                  <p>
                    The $360 initial deposit can later be applied to three individual players\' fees (the captain plus two other players). For those teams that do not make the final cut, we will refund your full deposit.
                  </p>
                  <p>
                    Bid-winning teams will be notified via email (as will wait-listed teams) by August 25th. Bid-winning teams must respond via e-mail or letter by September 1, whether or not they wish to accept the bid. If no response is received, that team will forfeit its bid, and the next wait-listed team will be contacted. At this point, the declining bid-winning team will receive a 100% refund on its deposit.
                  </p>
                  <p>
                    Bid-winning teams are required to secure their bid by submitting entrance fees for at least 8 players (at $140 per player) by September 22.
                  </p>
                  <p>
                    If a bid-winning and bid-accepting team fails to submit the above mentioned players\' fees, its bid will be lost, and the next wait-listed team will be given priority. If we are able to fill this new vacancy, we will issue only a partial deposit refund of $160. If we are unable to fill the vacancy, no refund of deposit will be issued.
                  </p>
                  <p>
                    The remainders of each team\'s entrance fees are due by October 15. Any entrance fee not paid in full by this date will be assessed the late registration fee of $155.
                  </p>
                  <p>
                    If any team forfeits its position after October 1, the deposit will be forfeited, regardless of our success in filling the vacancy.
                  </p>  
                <section id="bidpriorities" class="grid_7">
                    <h2>
                        Bid Priority Considerations
                    </h2>
                    <p>
                        Every year, Hopu Ka Lewa&#039s popularity grows, and we have gotten to the point where we regretfully cannot accept all of the bid applications we receive.  In accordance with the mission of Hopu Ka Lewa, the committee will decide on team bid applications with the following priority considerations in mind.  These are not requirements to submit a successful bid application, but will only help your chances for invitation.
                    </p>
                    <ol>
                        <li>Local Hawaii teams.</li>
                        <li>Teams whose history of exuding Spirit of the Game, sportsmanship, and creativity far exceeds others at Hopu Ka Lewa.</li>
                        <li>Bids that include a 3-5 minute video explaining who your team is, why you deserve to be invited, and what you will contribute to the Hopu Ka Lewa theme.  Other creative media and forms of expression are very welcome and appreciated.</li>
                        <li>Teams that anticipate that they will contribute something to Hopu Ka Lewa that has never been seen before and will change the tournament forever.</li>
                        <li>Teams with the highest number of players who are 100% committed to attending.</li>
                        <li>Bids submitted prior to the deadline.</li>
                        <li>Teams whose registration fees are paid prior to the deadline.</li>
                    </ol>
                </section>
                <section id="importantdates" class="grid_5">
                    <h2>
                        Important Team Bid Dates
                    </h2>
                    <p>
                        Keep these dates in mind when planning to bring a team to Hopu!
                    </p>
                    <dl>
                        <dt>' . date('M j, Y',$dates['bid_deadline_snailmail']) . '</dt><dd>
                            Postmark date for all team bid checks: $360.  
                            <!--Block comment to remove mailing address after deadline passes:-->
                            If paying by check, please make it out to:
                            <blockquote>
                              Aaron Rosa<br/>
                              3781 Anuhea Street<br/> 
                              Honolulu HI 96816
                            </blockquote>
                            
                            </dd>
                        <dt>' . date('M j, Y',$dates['bid_deadline_online']) . '</dt><dd>Last day to submit a team bid and pay the deposit online.</dd>
                        <dt>' . date('M j, Y',$dates['invites_out']) . '</dt><dd>Invite and Waitlisted notifications will be emailed to captains.</dd>
                        <dt>' . date('M j, Y',$dates['accept_deadline']) . '</dt><dd>Last day for teams to send email confirmation of bid acceptance.</dd>
                        <dt>' . date('M j, Y',$dates['team_refund']) . '</dt><dd>Last day to request partial refund of team deposit.</dd>
                    </dl>
                </section>'
);
$template->display($params);
?>
<?php
/* stash
 * 
 * <p> 
                        Want to bring a team to Hopu 14?  Please fill out the bid application <a href="bid_hopu.php#teambidapp">below</a> and follow it with any supplementary materials you wish.
                    </p>
 */
?>
