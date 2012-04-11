<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<?php require_once 'base.php'; ?>
<?php require_once 'headCommonPreTitle.php'; ?>
    
<title>Logistics | Hopu Ka Lewa</title>

<meta name="description" content="">
<meta name="keywords" content="">

<?php require_once 'headCommonPostTitle.php'; ?>

</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		       
        <div id="banner">            
			<hgroup>
			  <h1>HOPU KA LEWA</h1>
			</hgroup>            
        </div>
        
        <nav id="topnav" role="navigation" class="clearfix">  
        	<?php require 'navbar.php'; ?>
		</nav><!-- #access -->
       
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">

    
<!-- content area -->    
      <div id="content" class="grid_12">
          <section id="logistics">
              <hgroup>
                  <h1>
                      Hopu Ka Lewa 14 Logistics
                  </h1>
              </hgroup>
              <h2>Tournament Details</h2>
              <dl>
                  <dt>Kickoff:</dt>
                  <dd>Not football.</dd>
              </dl>
              <h2>Travel Details</h2>
              <p>
                Rental cars are available at the airport. 
              </p>
                <p> 
                If you prefer not to camp, rental options are available, but you are on your own to secure them. Search near/under 'Waimanalo'. Honolulu is a 45 minute drive. 
                </p>
                <p>
                If you need assistance with housing before or after the tournament, please contact us and we will try to find floor space, yard space, or direct you to great camping. 
                </p>
                <p>
                <emph>How do I get there?</emph>
                </p>
                <ul>
                <li>By Plane:  Fly into Honolulu International Airport (HNL). Just about every major airline serves HNL. 
                <li>By Car: From the airport, Waikiki, or anywhere in Honolulu-get on H1 East. Take it until it ends! H1 turns into Kalanianaole Highway, which passes by Hawaii Kai, Hanauma Bay, Sandy Beach, Sea Life Park, and through Waimanalo. When you see the McDonald's on your right, in Waimanalo, you've got less than a half-mile to go. The fields will be on your left; camping is at Waimanalo Bay Beach Park, on your right.
                <li>By Bus: From the airport-get on bus 19 or 20 heading towards Waikiki Beach. Get off at Hotel and Alakea. Cross Hotel Street, walk up Alakea a few meters (by the District Court House) and transfer to bus 57 heading towards Kailua/Sea Life Park. The bus ride is 30 minutes to an hour after you transfer, so be patient! Get off at the bus stop right outside of the Waimanalo Polo Fields/ Waimanalo Beach Recreation Area. Officially, no luggage is allowed on the bus, so pack light! From Waikiki-catch bus 58 heading towards Hawaii Kai/Sea Life Park from any of a number of bus stops on Kuhio Avenue. After a long (45 min or so) ride, get off in Waimanalo at the bus stop right outside of the Waimanalo Polo Fields/ Waimanalo Beach Recreation Area. Bus rides are $2 one way. 
                </ul>
          </section>
          
		
      </div><!-- #end content area -->
      
  
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
    <?php require_once 'footerCommon.php'; ?>
</footer>
    
<script type="text/javascript">

// Fireup the plugins
	$(document).ready(function(){
	// initialise menu
	jQuery('ul.sf-menu').superfish();

	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});

</script>
	
</body>
</html>