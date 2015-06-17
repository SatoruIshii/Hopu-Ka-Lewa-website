<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2014.php');
date_default_timezone_set('Pacific/Honolulu');
$curdate = date('m-d-Y');
require 'model/dates.php';
$params = array(
  'pagetitle' => 'Team Bid Registration',
  'description' => "Instructions for submitting a team bid to Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid',
  'googleform' => array(
    'active' => $curdate <= $dates['bid_deadline_online'],
    'id' => 'teambidapp',
    'src' => "https://docs.google.com/forms/d/1XoWwdmNA6zIRTMCJx-Vc0_d8JhsV2RL7TgKChxaMyiw/viewform?embedded=true",
    'height' => '1660px'
  ),
  'content' => ''
);
$hgroup = '<hgroup class="grid_12">
    <h1>
        Team Bid Processes
    </h1>';
$hgroup .= '</hgroup>';

$bodycontent = <<<CONTENT
<section id="summary" class="grid_12">
    <p>
        Please submit your team bid via the <a href="http://ultimatecentral.com/en_US/e/hopu-ka-lewa-17">Ultimate Central</a>.
        Supplemental materials, such as video or other media, are <em>strongly</em> encouraged and can be emailed to the <a href="mailto:hoputd@hawaiiultimate.com">Tournament Directors</a>.
        Show us what your team will contribute to the tournament and why you want to play in Hopu Ka Lewa 16.  
        The more spirited your bid, the better your chances of getting to play!  
        This tournament is all about sharing the Ohana experience with the community and getting to know each other.  
        Creativity and artistic expression are strongly encouraged. 
    </p>
</section>
<section id="caveats" class="grid_6">
  <h2>
    Caveats
  </h2>
  <p>
    The $875 initial deposit can later be applied to seven individual players' fees. 
    For those teams that do not make the final cut, we will refund your full deposit.
  </p>
  <p>
    Bid-winning teams will be notified via email (as will wait-listed teams) by September 15. 
  </p>
  <p>
    Iindividual Registration will open on September 16.
  </p>
  <p>
    For those of you who have captained HOPU teams in the past, you will notice the price increase for the team bid. We are implementing a new "7 On The Line" policy for activating the team bid review. This new policy is meant to help the organizers better plan for the tournament costs, and helps us separate the "wheat from the shaft." Or the stars from the dark matter if you're really into the sci-fi theme ;) Either way, the entire Hopu committee dedicates themselves to putting on the best damn tournament in the galaxy, and asking folks to find a savage squad of early recruits helps us do just that. 
  </p>
</section>
<section id="importantdates" class="grid_6">
    <h2>
        Important Team Bid Dates
    </h2>
    <p>
        Keep these dates in mind when planning to bring a team to Hopu!
    </p>
    <dl>
        <dt>August 25</dt><dd>
            Postmark date for all team bid checks: $875.  
            <!--Block comment to remove mailing address after deadline passes:-->
            If paying by check, please make it out to <strong>Hopu Ka Lewa</strong> and send it to:
            <blockquote>
              Ari Patz<br/>
              666 Prospect St. #102<br/> 
              Honolulu, HI 96813
            </blockquote>

            </dd>
        <dt>September 1</dt><dd>Last day to submit a team bid and pay the deposit <a href="http://ultimatecentral.com/en_US/e/hopu-ka-lewa-17">online</a>.</dd>
        <dt>September 15</dt><dd>All captains of teams who submitted bids will get emails notifying them of acceptance or otherwise.</dd>
        <dt>September 16</dt><dd>Iindividual Registration opens.</dd>
        <dd>Early bird: $125.00 (by October 2nd)<br />
        Regular rate: $150.00 (by November 1st)<br />
        Late rate: $180.00 (by November 8th)</dd>
    </dl>
</section>
<div class="grid_12"></div>
<section id="bidpriorities" class="grid_6">
    <h2>
        Bid Priority Considerations
    </h2>
    <p>
        Every year, Hopu Ka Lewa&#039s popularity grows, and we have gotten to the point where we regretfully cannot accept all of the bid applications we receive.  
        In accordance with the mission of Hopu Ka Lewa, the committee will decide on team bid applications with the following priority considerations in mind.  
        These are not requirements to submit a successful bid application, but will only help your chances for invitation.
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
CONTENT;
$params['content'] = $hgroup . $bodycontent;
$template->display($params);
?>
