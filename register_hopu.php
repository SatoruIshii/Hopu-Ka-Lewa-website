<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'indregurl' => false,
  'pagetitle' => 'Individual Registration',
  'description' => "Instructions for player registration for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player',
  'content' => '<div id="content">
                    <hgroup class="grid_12">
                        <h1>
                            Hopu Ka Lewa 14 Individual Registration
                        </h1>
                        <p>
                            Player fee includes all breakfasts and dinners, drinks, entertainment, camping, player&#039s pack (disc and Hopu surprise), plus all field supplies (water, fruit, EMT, etc.).  All players should register through the online registration system, which will be available once team bids are accepted.
                        </p>
                    </hgroup>
                    <section class="grid_7" id="individualregistration">
                        <h2>
                            Player Registration Rates
                        </h2>
                            <h3>
                                Early-bird (Aug. 31 to Sep. 30, 2012): $120
                            </h3>
                            <p>
                                You must have registered and paid before Sep. 30 in order to avoid increased fees.  That means that your check must be postmarked before Sep. 30.
                            </p>
                            <h3>
                                Late Registration (Oct. 1 - Oct. 28, 2012): $140
                            </h3>
                            <p>
                                Again, you must have registered and paid before Sep. 30 in order to avoid the Late fee.
                            </p>
                            <p>
                                Only players registering before Oct. 1 are guaranteed a complete player&#039s pack.
                            </p>
                            <h3>
                                Shame-on-you Registration (Oct. 29 - Nov. 9, 2012): $159
                            </h3>
                            <p>
                                Hana hou: You must have registered and paid before Oct. 28 in order to avoid the Shame-on-you fee.  Also, only players registering before Oct. 1 are guaranteed a complete player&#039s pack.
                            </p>
                            <p>
                                <strong>Do Not Mail A Check.</strong>  Checks had to have been postmarked before Oct. 28 to be accepted.  Payment online is accepted until Nov. 2.  Checks or cash (no credit cards) are accepted as payment at the fields.
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
                                Daily guests can register and pay at the fields.  No need register online.
                            </p>
                    </section>
                    <section class="grid_5" id="individualdates">
                        <h2>
                            Important Individual Registration Dates
                        </h2>
                        <p>
                            Please note these dates on your calendar so you how to register and how much to pay.
                        </p>
                        <dl>
                            <dt>Sep. 28, 2012</dt><dd>Last day to request a full player&#039s refund (minus $15 processing fee).</dd>
                            <dt>Sep. 30, 2012</dt><dd>Last day to register for Early-bird rate: $120 (payment must be made online or postmarked by this date).</dd>
                            <dt>Oct. 26, 2012</dt><dd>Last day to request a partial player&#039s refund.</dd>
                            <dt>Oct. 27, 2012</dt><dd>Last day to mail a check as payment for tournament registration</dd>
                            <dt>Oct. 28, 2012</dt><dd>Last day to register for the Late rate: $142 (payment must be made online or postmarked by this date).</dd>
                            <dt>Nov. 2, 2012</dt><dd>Last day to register and pay online for the Shame-on-you rate: $159 (mailed checks will not be accepted after Oct. 27, 2012).</dd>
                            <dt>Nov. 3-9, 2012</dt><dd>Shame-on-you rate applies: $159 (do not mail anything nor register nor pay online; register and pay at the fields on Nov. 9, 2012).</dd>
                        </dl>
                    </section>
          
      </div>'
);
$template->display($params);
?>