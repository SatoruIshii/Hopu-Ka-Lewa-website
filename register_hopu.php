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
require_once 'model/dates.php';
$params = array(
  'googleform' => array(
    'active' => true,
	'id' => 'individualapp',
	'src' => 'https://docs.google.com/a/hawaiiultimate.com/forms/d/1mNtu_JyOV0e1BCIBEhAVT3e_T1EM9sOb7S3JMudMgIo/viewform?embedded=true',
	'height' => '950px'
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
                      Current Info (as of June 2013)
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
                      Player fee is $120.00 per player* this year. 
					  Fee includes all breakfasts and dinners, entertainment, camping, player\'s pack (cup, disc, and Hopu logo surprise), plus all field supplies (water, fruit, juice, EMT).
                  </p>
                  <p>
                      All players should register online. 
					  If you cannot pay online, please do so by sending a check (made out to <strong>Hopu Ka Lewa</strong>) to: 
                      <blockquote>
                        Ari Patz<br/>
                        1777 Ala Moana Blvd Suite 142-39<br/> 
                        Honolulu, HI 96815
                      </blockquote>
                      If paying by check, please register using the online form and choose the pay by check option. 
					  Players should also check in on-site either Friday night or Saturday morning.
                  </p>
                  <p>
                    From ' . date('F j',$dates['indiv_late_start']) . '-' . date('j',$dates['indiv_late_end']) . ', the late registration fee is $145 (you must have registered and PAID before ' . date('F j',$dates['indiv_reg_end']) . ' in order to avoid the late fee). 
					Only players registering before ' . date('F j',$dates['indiv_reg_end']) . ' are guaranteed a complete player\'s pack.
                  </p>
                  <p>
                    After ' . date('F j',$dates['indiv_shame_start']) . ', the shame-on-you rate applies: $170.  
					Online registration and payment will only be accepted through '  . date('F j',$dates['online_payment']) . '.  
					After this, all registration and payment must take place at the fields.
                  </p>
                  <p>
                    A full player\'s fee refund is available to players who notify the tournament director (via writing or email) before ' . date('F j',$dates['full_player_refund']) . ' that they will not be attending the tournament. 
					After ' . date('F j',$dates['full_player_refund']) . ', players withdrawing from the tournament will receive a partial refund.
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
                        <dt>' . date('M j, Y',$dates['indiv_reg_end']) . '</dt><dd>Last day to register for regular player rate: $120 (payment must be made online or postmarked by this date).</dd>
						<dt>' . date('M j, Y',$dates['full_player_refund']) . '</dt><dd>Last day to request a full player&#039s refund (minus $15 processing fee).</dd>
                        <dt>' . date('M j, Y',$dates['indiv_late_end']) . '</dt><dd>Last day to register for the Late rate: $145 (payment must be made online or postmarked by this date).</dd>
                        <dt>' . date('M j, Y',$dates['online_payment']) . '</dt><dd>Last day to register and pay online for the Shame-on-you rate: $170 (mailed checks will not be accepted after ' . date('M j',$dates['indiv_late_end']) . ').</dd>
                        <dt>' . date('M j',$dates['online_payment']+1) . '-' . date('j, Y',$dates['indiv_shame_end']) . '</dt><dd>Shame-on-you rate applies: $170 and registration and payment must be done at the fields on ' . date('M j',$dates['indiv_shame_end']) . '.  Do not mail anything nor register nor pay online.</dd>
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
                    <details>
                        <summary>Personal Check</summary>
                        <!--This block removed one week prior to tournament:-->
                        <p>If you choose not to pay online, please pay by sending a check payable to "Hopu Ka Lewa" to:</p>
                        <blockquote>
                          Aaron Rosa<br/>
                          3781 Anuhea Street<br/> 
                          Honolulu HI 96816
                        </blockquote>
                        <p>Along with your check, include a short note with your team name and the name you registered under.  
						If paying by check, you will still need to fill out the registration form online.  
						Simply indicate in your registreation that you will pay by check.</p>
                        
                        <p>Note that checks postmarked after <strong>'. date('F j',$dates['indiv_late_end']) .'</strong> will not be accepted.  
						Please either pay online or at the fields.</p>
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
                        <dt>' . date('M j, Y',$dates['full_player_refund']) . '</dt><dd>Last day for full player&#039s fee refund (minus a processing fee of $15). 
						To qualify for a full refund, you must notify the Tournament Director, via mail or <a href="mailto:hoputd@hawaiiultimate.com">email</a>, by ' . date('M j',$dates['full_player_refund']) . '.</dd>
                    </dl>
                </section>
                <section id="pickups" class="grid_5">
                    <h2>
                        Pickup Players
                    </h2>
                    <p>No team?  No problem!</p>
                    <h3>
                        Foreign Exchange Program (pickup team)
                    </h3>
                        <p>
							Individuals who would like to attend, but do not have a team, may register for the Foreign Exchange Program - an exciting chance to share language, culture, and bodily fluids with a generous host team. 
							This honor is specially reserved for those individual submissions that show outstanding promise in bringing the best spirit and fun to our tournament. 
							We may be able to place you on a team that needs players, but this is up to the tournament directors\' and team captains\' discretion. 
							To register, complete the online registration and select "Other" for your team or <a href="mailto:hoputd@hawaiiultimate.com">drop us an email</a> that you would like to be placed on a team, and we will be in touch as the tournament approaches.
                        </p>
												    
                        <p>
							The Foreign Exchange Program is limited to 20 male and 20 female players. 
							It will be filled on a first-come, first-served basis.
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
                            Early-bird (' . date('M j',$dates['earlybird_start']) . ' - ' . date('M j, Y',$dates['earlybird_end']) . '): $120
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