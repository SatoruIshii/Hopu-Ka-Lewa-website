<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<?php require_once 'base.php'; ?>
<?php require_once 'headCommonPreTitle.php'; ?>
    
<title>Hopu Ka Lewa</title>

<meta name="description" content="">
<meta name="keywords" content="">

<?php require_once 'headCommonPostTitle.php'; ?>

<!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- end JS-->

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
        
<!-- responsive FlexSlider image slideshow -->
    <div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<img src="images/ClayMcKell_DSC1822.jpg" />
	    		<p class="flex-caption">Birds...</p>
	    	</li>
	    	<li>
	    		<img src="images/ClayMcKell_DSC1829.jpg" />
<!--	    		<p class="flex-caption">and bees. This image is also wrapped in a link!</p>-->
	    	</li>
	    	<li>
	    		<img src="images/ClayMcKell_DSC1838.jpg" />
<!--                <p class="flex-caption">Macro bugger!</p>-->
	    	</li>
	    	<li>
	    		<img src="images/ClayMcKell_DSC2130.jpg" />
	    	</li>
            <li>
	    		<img src="images/ClayMcKell_DSC2137.jpg" />
	    	</li>
            <li>
	    		<img src="images/ClayMcKell_DSC2181.jpg" />
	    	</li>
            <li>
	    		<img src="images/ClayMcKell_DSC2339.jpg" />
	    	</li>
	    </ul>
	  </div>
<!-- FlexSlider -->
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">

    
<!-- content area -->    
      <div id="content">
          <section id="vitals" class="grid_5">
              <hgroup>
                  <h1>
                      Hopucalypse 2012
                  </h1>
              </hgroup>
              <dl>
                  <dt>Who:</dt>
                    <dd>You and up to 16 spirited co-ed teams.</dd>
                  <dt>What:</dt>
                    <dd>Two days on the field, one day at the beach.</dd>
                  <dt>When:</dt>
                    <dd>November 9-12, 2012</dd>
                  <dt>Where:</dt>
                    <dd><a href="http://www.google.com/maps?f=q&hl=en&q=+Kalanianaole+Hwy+%26+Ehukai+St,+waimanalo+hawaii&ie=UTF8&z=15&ll=21.33839,-157.70299&spn=0.026063,0.048966&om=1">Waimanalo Polo Fields</a>, Oahu, Hawai'i</dd>                    
                  <dt>Why:</dt>
                    <dd>It's the end of the world!</dd>
              </dl>
          </section>
          <section id="facebook" class="grid_4">
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Hopu-Ka-Lewa/145315288875373" data-width="500" data-colorscheme="dark" data-show-faces="true" data-border-color="black" data-stream="true" data-header="true"></div>          </section>
          <section id="details" class="grid_7">
              <hgroup>
                  <h1>Bids & Registration Details</h1>
              </hgroup>
              <p>
              Candy canes cheesecake topping faworki halvah toffee chocolate gummies. Chocolate cake topping jujubes sweet faworki marzipan. Topping soufflé pudding pie lollipop. Gummi bears lemon drops tiramisu. Tart brownie cotton candy cookie. Bear claw sweet dragée jelly. Lollipop marzipan candy tiramisu marshmallow toffee chocolate cake. Bonbon cookie macaroon soufflé candy jujubes. Bonbon cotton candy cotton candy. Apple pie jelly beans topping lemon drops cotton candy halvah jujubes.
              </p>
              <p>
Liquorice bear claw pie marzipan tootsie roll donut jelly beans fruitcake bear claw. Danish gummi bears candy canes jelly beans ice cream toffee lollipop brownie. Cotton candy macaroon jelly-o marshmallow chocolate bar halvah dragée. Donut wypas lollipop jujubes. Jelly-o lollipop candy. Macaroon applicake soufflé cheesecake halvah gummies.
              </p>
              <p>
Tart bear claw chocolate cake brownie sesame snaps croissant jelly-o. Toffee jelly-o oat cake dragée icing. Sweet roll liquorice liquorice carrot cake chocolate bar faworki pudding. Tiramisu marshmallow cookie fruitcake biscuit tiramisu. Candy caramels liquorice applicake. Sweet donut wafer brownie tootsie roll bear claw apple pie.
              </p>
          </section>
          <section class="grid_4">
              SAVAGE ftw
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
		
	// initialise  slideshow
	$('.flexslider').flexslider();

	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});

</script>
	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>