<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2014.php');
date_default_timezone_set('Pacific/Honolulu');
$curdate = time();
require_once 'model/dates.php';
$params = array(
  'googleform' => array(
    'active' => $curdate < $dates['online_payment'],
	'id' => 'individualapp',
	'src' => "https://docs.google.com/forms/d/1VwRT79cV9rVciBQzk4fSvg_dx7XxlqwrLkV3woor0Z8/viewform?embedded=true",
	'height' => '750px'
  ),
  'pagetitle' => 'Individual Registration',
  'description' => "Instructions for player registration for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player',
  'pagejs' => '
                $(document).ready(function(){
                    var formsec = $("section.googleform");
                    if (formsec.find("iframe").length > 0) {
                        var formid = formsec.attr("id");
                        if (formid != "") {
                            $("nav#secondary-navigation ul").prepend("<li><a href=\"register_hopu.php#"+formid+"\">Register!</a></li>");
                        }
                    }                        
                });',
  'content' => '    <hgroup class="grid_12">
                    <h1>
                        Individual Registration
                    </h1>
                    <h2>
                      Current Info (as of July 24th, 2015)
                    </h2>
                </hgroup>
                <aside class="grid_2">
                    <h2>Info, Stat!</h2>
                        <nav id="secondary-navigation">
                            <ul>
                                <li><a href="register_hopu.php#individualregistration">Player Registration Rates</a></li>
                                <li><a href="register_hopu.php#individualdates">Important Dates</a></li>
                                <li><a href="register_hopu.php#paymentoptions">Payment Options</a></li>
                                <li><a href="register_hopu.php#individualrefunds">Refund Options</a></li>
                                <li><a href="register_hopu.php#pickups">Pickup Players</a></li>
                            </ul>
                         </nav>
                </aside><!-- #end left sidebar -->
                <section class="grid_6" id="registrationinfo">
                  <p>
                      Player fee (early bird) is $125.00 per player* this year (by October 2nd). 
					  Fee includes all breakfasts and dinners, entertainment, camping, player\'s pack (cup, disc, and Hopu logo surprise), plus all field supplies (water, fruit, juice, EMT).
                  </p>
                  <p>
                      <font size=+1><a href="http://ultimatecentral.com/en_US/e/hopu-ka-lewa-17/register">Individual Registration page >></a></font> 
		  </p>
                  <p>
                      All players should register and pay via the <a href="http://ultimatecentral.com/en_US/e/hopu-ka-lewa-17">Ultimate Central</a>. 
					  If you absolutely cannot pay online, please <a href="mailto:hoputd@hawaiiultimate.com">contact the tournament directors</a> <strong>BEFORE submitting your registration online</strong> to make alternate payment arrangements
					  Players should also check in on-site either Friday night or Saturday morning. 
                  </p>
                  <p>
                    From October 3rd - by November 1st, the late registration fee is $150 (you must have registered and PAID before October 2nd in order to get the early bird fee). 
					Only players registering before October 2nd are guaranteed a complete player\'s pack.
                  </p>
                  <p>
                    After November 2nd, the late rate applies: $180.  
					Online registration and payment will only be accepted through by November 8th.  
					After this, all registration and payment must take place at the fields.
                  </p>
                  <p>
                    A full player\'s fee refund is available to players who notify the tournament director (via writing or email) before October 15th that they will not be attending the tournament. 
					After October 15th, players withdrawing from the tournament will receive a partial refund.
                  </p>
                    Guest fee is $80 for the weekend. 
					Guests should register and pay online. 
					The guest fee covers all breakfasts and dinners (3 each), nightly entertainment (bands, DJs, and other surprises), camping, and a guest pack (with all the goodies).
                  </p>
                  <p>
                    A nightly guest pass can be purchased at the door for $20/night. 
					This fee covers dinner and entertainment for one evening. 
					ALL GUESTS MUST HAVE A PLAYER "SPONSOR" THEM. 
					PLAYERS SHOULD NOTIFY US PRIOR TO THE TOURNEY OF GUEST NAMES. 
					NO ONE WILL BE ALLOWED TO ENTER THE PARTY WITHOUT A PLAYER "SPONSOR".
					(See further information for guests posted)
                  </p>
                  <small>
                    *Hopu fees are based on an ideal budget divided by a realistic average of the number of players who have attended the tournament in recent years. 
					Any excess monies earned by the tournament go towards supporting the events, activities, and outreach of the Hawaii Ultimate League Association (HULA).
                  </small>
                </section>
                
                <section class="grid_4" id="individualdates">
                    <h2>
                        Important Individual Registration Dates
                    </h2>
                    <p>
                        Please note these dates on your calendar so you know how to register and how much to pay.
                    </p>
                    <dl>
                        <dt>October 2nd</dt><dd>Last day to register for the early bird fee: $125 (payment must be made online by this date).</dd>
						<dt>October 15th</dt><dd>Last day to request a full player&#039s refund (minus $15 processing fee).</dd>
                        <dt>November 1st</dt><dd>Last day to register for the regular rate: $150 (payment must be made online by this date).</dd>
                        <dt>November 8th</dt><dd>Last day to register and pay online for the late rate: $180 </dd>
                    </dl>
                </section>
								<div class="grid_12"></div>
                <section id="paymentoptions" class="grid_3">
                    <h2>
                        Methods of Payment
                    </h2>
                    <details>
                        <summary>Credit Card</summary>
                        <p>We use PayPal to process online credit card transactions.  
						Instructions will be presented to you after you submit your online individual registration.</p>
                    </details>
                </section>
                <section id="individualrefunds" class="grid_4">
                    <h2>
                        Individual Player Refunds
                    </h2>
                    <p>Did something come up?  
					We&#039re sorry we won&#039t be seeing you this year.  
					Please keep the following dates in mind when asking for a refund.</p>
                    <dl>
                        <dt>Oct 15th, 2015</dt><dd>Last day for full player&#039s fee refund (minus a processing fee of $15). 
						To qualify for a full refund, you must notify the Tournament Director, via mail or <a href="mailto:hoputd@hawaiiultimate.com">email</a>, by ' . date('M j',$dates['full_player_refund']) . '.</dd>
                    </dl>
                </section>
                <section id="pickups" class="grid_5">
                    <h2>
                        Pickup Players
                    </h2>
                    <p>No team?  No problem!</p>
                    <p>
                      All players wishing to play for the Spirit Team should register with "Aloha Spirit".  
                      If more than 20 players register for this team, we may consider adding a second spirit team.
                    </p>
                </section>'
);
$template->display($params);
?>

<?php
/*
 * Old info:
 * <section class="grid_6" id="individualregistration">
                    <h2>
                        Player Registration Rates
                    </h2>
                        <h3>
                            Early-bird (' . date('M j',$dates['earlybird_start']) . ' - ' . date('M j, Y',$dates['earlybird_end']) . '): $125
                        </h3>
                        <p>
                            You must have registered and paid before ' . date('M j',$dates['earlybird_end']) . ' in order to avoid increased fees.  That means that your check must be postmarked before ' . date('M j',$dates['earlybird_end']) . '.
                        </p>
                        <h3>
                            Late Registration (' . date('M j',$dates['latereg_start']) . ' - ' . date('M j, Y',$dates['latereg_end']) . '): $140
                        </h3>
                        <p>
                            Again, you must have registered and paid before ' . date('M j',$dates['earlybird_end']) . ' in order to avoid the Late fee.
                        </p>
                        <p>
                            Only players registering before ' . date('M j',$dates['earlybird_end']) . ' are guaranteed a complete player&#039s pack.
                        </p>
                        <h3>
                            Shame-on-you Registration (' . date('M j',$dates['shameonyou_start']) . ' - ' . date('M j, Y',$dates['shameonyou_end']) . '): $159
                        </h3>
                        <p>
                            Hana hou: You must have registered and paid before ' . date('M j',$dates['latereg_end']) . ' in order to avoid the Shame-on-you fee.  Also, only players registering before ' . date('M j',$dates['earlybird_end']) . ' are guaranteed a complete player&#039s pack.  After ' . date('M j',$dates['latereg_end']) . ', <strong>Do Not Mail A Check.</strong>  Checks had to have been postmarked before ' . date('M j',$dates['latereg_end']) . ' to be accepted.  Payment online is accepted until ' . date('M j',$dates['online_payment']) . '.  Checks or cash (no credit cards) are accepted as payment at the fields.
                        </p>
                    <h2>
                        Guest Registration Rates
                    </h2>
                        <h3>
                            Full Weekend Guest: $70
                        </h3>
                        <p>
                            Included for this rate are all breakfasts and dinners, drinks, camping permit, player&#039s pack, and entertainment.
                        </p>
                        <p>
                            Weekend guests may register online or by sending a check.
                        </p>
                        <h3>
                            Daily Guest: $20
                        </h3>
                        <p>
                            Included for this rate are dinner, drinks, and entertainment.
                        </p>
                        <p>
                            Daily guests may register online (but are not obligated to do so), however they must check-in and pay at the fields.
                        </p>
                        <p>
                            Daily guests must be escorted through the field entrance by a paid player or be registered on the guest list.  To get on the guest list, a paid player must notify the Tournament Director of the guest&#039s name by ' . date('M j',$dates['guest_list']) . '.
                        </p>
                </section>
 */
