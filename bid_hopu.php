<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<?php require_once 'base.php'; ?>
<?php require_once 'headCommonPreTitle.php'; ?>
    
<title>Team Bid Registration | Hopu Ka Lewa</title>

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
          <section id="teambid">
              <hgroup>
                  <h1>
                      Hopu Ka Lewa 14 Team Bid Processes
                  </h1>
              </hgroup>
              Bidding is open?
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