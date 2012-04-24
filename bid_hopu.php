<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Team Bid Registration',
  'description' => "Instructions for submitting a team bid to Hopu Ka Lewa 14.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid',
  'content' => '<div id="content">
                <hgroup class="grid_12">
                    <h1>
                        Hopu Ka Lewa 14 Team Bid Processes
                    </h1>
                </hgroup>
                <section id="importantdates" class="grid_5">
                    <h2>
                        Important Team Bid Dates
                    </h2>
                    <p>
                        Keep these dates in mind when planning to bring a team to Hopu!
                    </p>
                    <dl>
                        <dt>Aug. 9, 2012</dt><dd>Postmark date for all team bid checks: $360.</dd>
                        <dt>Aug. 17, 2012</dt><dd>Last day to submit a team bid and pay the deposit online.</dd>
                        <dt>Aug. 24, 2012</dt><dd>Invite and Waitlisted notifications will be emailed to captains.</dd>
                        <dt>Aug. 31, 2012</dt><dd>Last day for teams to send email confirmation of bid acceptance.</dd>
                        <dt>Sep. 28, 2012</dt><dd>Last day to request partial refund of team deposit.</dd>
                    </dl>
                </section>
                <section id="bidrequirements" class="grid_7">
                    <h2>
                        Bid Application
                    </h2>
                    <p>
                        Please be sure to include this information in your bid.
                    </p>
                    <ul>
                        <li>Team name</li>
                        <li>Where are you from?</li>
                        <li>Team captain name(s)</li>
                        <li>Email contact</li>
                        <li>Phone number</li>
                        <li>Expected size of team</li>
                        <li>Current number of players who are 100% committedd to attend</li>
                        <li>Approximately what fraction of your team will be 21 years of age or older at the time of the tournament?</li>
                        <li>Which 3 individual player registrations should the team bid deposit count towards?</li>
                        <li>Tell us about your team</li>
                        <li>If invited, what will your team contribute to Hopu Ka Lewa 14?  What will you contribute to the theme?</li>
                        <li>How will your team prepare for the Hopucalypse?</li>
                    </ul>
                </section>
                <section id="bidpriorities" class="grid_12">
                    <h2>
                        Bid Priority Criteria
                    </h2>
                    <p>
                        We all love fun and creative bids.  Sometimes, it helps to know what the tournament committee is looking for in a bid.  Here&#039s a list of what we&#039re looking for, in descending order:
                    </p>
                    <ol>
                        <li>Local Hawaii teams.</li>
                        <li>Teams whose history of exuding Spirit of the Game, sportsmanship, and creativity far exceeds others at Hopu Ka Lewa.</li>
                        <li>Bids that include a 3-5 minute video explaining who your team is, why you deserve to be invited, and what you will contribute to the Hopu Ka Lewa theme.  Other creative media and forms of expression are very welcome and appreciated.</li>
                        <li>Teams that anticipate that they will contribute something to Hopu Ka Lewa that has never been seen before and will change the tournament forever.</li>
                        <li>Teams with the highest number of players who are 100% committed to attending.</li>
                        <li>Bids submitted prior to the deadline.</li>
                        <li>Teams whose registration fees are paid prior to the deadline</li>
                    </ol>
                </section>
          
		
      </div>'
);
$template->display($params);
?>