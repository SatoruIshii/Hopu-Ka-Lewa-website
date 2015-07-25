<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2014.php');
$params = array(
  'pagetitle' => 'Logistics',
  'description' => "Logistical information for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, logistics, travel, map',
  'content' => '    
    <hgroup class="grid_12">
      <h1>
          Hopu 17 Logistics
      </h1>
    </hgroup>
    <section class="grid_12">
      <p>
        Hopu Ka Lewa\'s mission has been to provide a fun, <strong>intimate</strong> co-ed tournament, with emphases placed on spirit and getting to know each other. 
        One of the ways we do this is by shortening rounds of play, in order to fit as many games as possible into each team\'s schedule. 
        This gives more opportunities for people to meet and enjoy each other. 
        We encourage CHEERING all the time! Boat Racing all the time! 
        Costumes, panty points, games, spirit awards, sideline music; all are highly encouraged and appreciated. 
      </p>
      <p>
        Please prepare yourself: expect to have an awesome weekend of Ultimate, camaraderie, and fun in the sun. 
        The Hopu Ka Lewa Committee has some awesome plans to facilitate “Spirit” out of each participant (whether they like it or not), so bring it!
      </p>
      <h2>Tournament Theme:</h2>
      <h3 style="text-align:center; font-size:200%; color:#FF9933; text-shadow:1px 2px 0 #000000;">Sci-Fi Hopu</h3>
      <p>
        For more than fifteen years, players have gorged themselves in the Ultimate Frisbee ecstasy only Hopu Ka Lewa could provide.
        However, now is not the time to let out your waist bands and let yourself go.
        \'Cause this rock is getting hot and all of your Hopu Ohana is going to be dressed to impress in their finest togas at the Cacchanalia on Saturday night in Waimanalo, Oahu.
        Show your spirit as we celebrate the 17th Hopu Ka Lewa!!!!
      </p>
      <h2>How Your Team Contributes to the Theme</h2> 
      <dl>
        <dt>Spirit Circle<dt>
        <dd>
          It is traditional that each team brings a cheer for the “Opening Ceremonies” held on Friday night. 
          The cheer can be funny, crude, cheesy, brutally honest, shameless, a parody, a musical, a dance; the possibilities are endless. 
          <strong>This is an opportunity for you and your team to introduce yourselves to everyone and show us your spirit.</strong>
          To keep things moving along, all cheers will be strictly limited to 60 seconds. 
          Notable cheers from Hopu Ka Lewa past can be viewed on the <a href="http://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373?sk=videos">Hopu Facebook page</a>.
        </dd>
        <dt>Flag</dt>
        <dd>
          We ask that each team come to the tournament with their very own team flag to represent their clique. 
          The fields you play at will have long metal poles to hang and display your team’s colors proudly. 
          The poles will accommodate mounting your team flag (sleeve over pole) (haha: mounting pole). 
        </dd>
        <dt>Post-Ultimate Spirit Game</dt>
        <dd>
          We try to promote intra-team mingling throughout this weekend. 
          To help facilitate this, we ask each team to bring a team original "spirit game", that involve as many players of each team as possible. 
          There are no limitations to what the game should be. 
          But it is recommended that the game is a representation of your team, where you are from, or the personality your team is trying to portray here at Hopu Ka Lewa.
        </dd>
        <dt>Hopu Spirit Game</dt>
        <dd>
          What sets Hopu apart from all other tournaments is that the fun doesn\'t stop before, during, or after games.
          Details TBA.
        </dd>
      </dl>
    </section>
    <section class="grid_6">
      <h2>Schedule of Events</h2>
      <h3>Friday, Nov. 13th, 2015 Agenda</h3>
      <dl>
        <dt>The party starts FRIDAY night (~4pm)</dt>
        <dd>
          Opening ceremonies, dinner, beer, spirit circle, team cheers, acrobat troupe, captains meeting, JUST BE THERE! 
          This is a great time to meet and greet.
        </dd>
        <dt>Spirit Circle and "A surprise event" (TBA)</dt>
        <dd>
          Starts promptly at 8pm
        </dd>
        <dt>Weekend Check-in</dt>
        <dd>
          First thing you need to do when you get to the field is check-in, which begins at 4pm and will remain open until about ~8pm. 
          You will be receiving your “backpack”, (disc, cup, fork, napkin, shwag, etc.) which will come in handy over the weekend. 
          If you don’t plan on getting to the field until Saturday do not worry. 
          Saturday check-in will be open from 6am-8am, during breakfast.
        </dd>
      </dl>
      <h3>Saturday, Nov. 14th, 2015 Agenda</h3>
      <dl>
        <dt>Pool play games</dt>
        <dd>
          Run from 8am – 5pm
        </dd>
        <dt>Saturday night is the Bacchanalia</dt>
        <dd>
          Proper attire <strong>is appreciated at dinner</strong>. 
          Yes, people do get into costume, and you will be in the minority if you don’t. 
          You are welcome to casually arrive at your convince. 
          Dress to impress: represent your team and your interpretation of the theme. 
          Let your imagination be your guide. 
        </dd>
        <dt>Boat Race Tournament</dt> 
        <dd>
          Saturday evening, be ready to get 7 on the line. 
          For some, this is the only trophy that matters. 
          See your captain for official boat race tournament rules.
        </dd>
        <dt>DJ Globerson</dt>
        <dd>
          Will be laying down tracks so prepare to rip up the dance floor!
        </dd>
      </dl>
      <h3>Sunday, Nov. 15, 2015 Agenda</h3>
      <dl>
        <dt>Bracket play</dt>
        <dd>Starts at 9am.
          Teams will be split into two brackets based on Saturday’s records (Championship and Beer).
        </dd>
        <dt>Championship Finals</dt>
        <dd>
          End around ~4pm
        </dd>
        <dt>Taiko Drummers</dt>
        <dd>
          After dinner, prepare to be entertained by a world-class Taiko troupe. 
          Taiko Drumming is a Japanese art form in which several performers play huge drums while acting out a choreographed dance. 
        </dd>
        <dt>Awards Ceremony</dt>
        <dd>
          Follows Taiko.
        </dd>
        <dt>Cynth and the What\'s his Faces</dt>
        <dd>
          This Oahu band will have you on your feet and keep you dancing into Monday.
        </dd>
      </dl>
      <h3>Monday, Nov. 16, 2015 Agenda</h3>
      <dl>
        <dt>Hat Draw</dt>
        <dd>
          The party moves to the beach and the Ultimate gets wet and wild. 
          We all get to relax a little while spending the day playing a mini tourney on one of the most beautiful beaches in Oahu.
        </dd>
      </dl>
    </section>
    <section class="grid_6">
      <h2>Camping and Showers</h2>
      <p>
        We have free campsites at Sherwoods (aka Waimanalo Bay Beach Park) right across the street and at Bellows Air Force Base. 
        Sorry, no camping at the fields. 
        You may notice that there is limited space at the field with a few tents, <strong>BUT</strong> this area is reserved for Hopu committee members, HULA Hall of Famers, and selected outstanding volunteers. 
        Please don’t camp at the field without the <strong>written consent</strong> of the Tournament Director. 
      </p>
      <p>
        Showers are located at either campsite location. 
        A dip in the ocean isn\'t bad either.
      </p>
    </section>
    <section class="grid_6">
      <h2>Green Friendly</h2>
      <p>
        We are doing our utmost to be a GREEN tournament. 
        One way we do this is by having you use your disc as your plate, to minimize the amount of rubbish we produce. 
        We provide liners for your discs to keep food off your plastic, so they don\'t get too yucky. 
      </p>
      <p>
        You will also receive a reusable napkin, spork, and cup to use all weekend (replacements are for sale if misplaced, we will NOT provide you more than one, so don\'t lose it). If you don\'t like eating off your disc then please BRING YOUR OWN REUSABLE DISH AND CUTLERY.
      </p>
      <p>
        We will also have on-site recycling. 
        Please help us sort things out by placing items in the appropriate bin.
      </p>
    </section>
    <section class="grid_6">
      <h2>Volunteer Opportunity</h2>
      <p>
        If you registered to volunteer, we won\'t ask a lot, but we are going to take you up on it. 
        We will do our best to make it really easy for you to know how you can help.
      </p>
      <p>
        <strong>Michelle Swan</strong> (Volunteer Coordinator) will send you an email about what tasks we could use your help with and remind you at check-in. 
        We truly appreciate everyone’s help and it’s really the volunteers that make the tournament run smoothly.
      </p>
      <p>
        If you do not want to volunteer, that\'s cool too. 
        Sit back and enjoy the tournament. 
        Please do us one small, but BIG, favor and clean up after yourselves. 
        If we all keep track of our own scraps, discs, rubbish and field trash, it\'s a lot nicer for everyone, and our beautiful island. 
        THANK YOU!
      </p>
    </section>
    <section class="grid_6">
      <h2>Individual 
      Registration</h2>
      <p>
        Everyone must register online including those who paid with the team bid deposit. 
        This is where we find out about your contact info, diet preferences, and team associations.
      </p>
      <p>
        Go to: <a href="http://hopukalewa.com/register_hopu.php">http://hopukalewa.com/register_hopu.php</a>
      </p>
    </section>
    <section class="grid_6">
      <h2>Hopu Ka Lewa Hat Draw</h2>
      <p>
      <!--
        Looking to do some island hopping? 
        Try Kohala Coast on the Big Island (fly into Kona) a week before (Nov. 7-8th).
        A great reason to extended your vacation, to include a very relaxed ultimate atmosphere and another weekend of parties.
      -->
      </p>
      <p>
        Check it out at: <a href="http://hopukalewa.com/hatdraw.php">http://hopukalewa.com/hatdraw.php</a>
      </p>
    </section>
    <section class="grid_8">
      <h2>Other Need To Know Stuff</h2>
      <dl>
        <dt>
        We provide Breakfast (6:30 – 8:00 a.m.) and Dinner (6 – 8 p.m.) but NO Lunch</dt>
        <dd>
          However, we do have yummy lunch vendors at the fields so bring some $$ for lunch. 
        </dd>
        <dt><a href="http://savageultimate.com/">Savage Ultimate</a></dt>
        <dd>
          Will be joining us again this year! Stop by their tent to pick up some official Hopu Ka Lewa 17 merchandise. 
          I’ve seen them and they are freaking sweet.
        </dd>
        <dt>Car ride sharing</dt>
        <dd>
          Save some cash and reduce your footprint. 
          Hopu Ka Lewa has made it that much easier for you to organize car rides from the airport and feel good about yourself. 
          Go to <a href="http://hopurideshare.erideshare.com/">erideshare.com</a> and enter our password “HopuRides”.  
          Create a username and password to post.
        </dd>
      </dl>
      <p>
        To get updated news on all the gossip about Hopu High. 
        <a href="http://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373">Check us out on Facebook.</a>
      </p>
      <p>
        Programs and game schedules will be emailed, as we get closer to the tournament date. 
      </p>
      <p>
        Have a good day!
      </p>
      <p>
        P.S. Feel free to <a href="mailto:hoputd@hawaiiultimate.com">email</a> me any questions
      </p>
    </section>
                '
);
$template->display($params);
?>
