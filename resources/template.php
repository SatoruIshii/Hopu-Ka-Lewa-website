<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<?php require_once 'headCommonPreTitle.php'; ?>
    
<title>Yet another mobile boilerplate</title>

<meta name="description" content="">
<meta name="keywords" content="">

<?php require_once 'headCommonPostTitle.php'; ?>

<!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- end JS-->


<!-- columns demo style. DELETE IT! -->
<style type="text/css">
<!--

#columnsdemo .grid_1 h1,
#columnsdemo .grid_2 h1,
#columnsdemo .grid_3 h1,
#columnsdemo .grid_4 h1,
#columnsdemo .grid_5 h1,
#columnsdemo .grid_6 h1,
#columnsdemo .grid_7 h1,
#columnsdemo .grid_8 h1,
#columnsdemo .grid_9 h1,
#columnsdemo .grid_10 h1,
#columnsdemo .grid_11 h1,
#columnsdemo .grid_12 h1 {
border: solid 1px black;
		text-align: center;
		padding: 10px;
}
-->
</style>
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		       
        <div id="banner">
        
        	<div id="logo"><img src="images/logo.png" width="290" height="100" alt="logo"></div>
            
			<hgroup>
			  <h1>Yet Another</h1>
				<h2>Mobile Boilerplate</h2>
			</hgroup>            
        </div>
        
        <nav id="topnav" role="navigation" class="clearfix">  
        	<?php require 'navbar.php'; ?>
		</nav><!-- #access -->
        
<!-- responsive FlexSlider image slideshow -->
    <div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<img src="images/pic1.jpg" />
	    		<p class="flex-caption">Birds...</p>
	    	</li>
	    	<li>
	    		<a href="http://www.prowebdesign.ro"><img src="images/pic2.jpg" /></a>
	    		<p class="flex-caption">and bees. This image is also wrapped in a link!</p>
	    	</li>
	    	<li>
	    		<img src="images/pic3.jpg" />
                <p class="flex-caption">Macro bugger!</p>
	    	</li>
	    	<li>
	    		<img src="images/pic4.jpg" />
                <p class="flex-caption">Photos by &copy; Konstantin Chuenkov</p>
	    	</li>
	    </ul>
	  </div>
<!-- FlexSlider -->
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">
    
<!-- left sidebar -->    
    <aside class="grid_4">
    <h2>Secondary Section menu</h2>
        <nav id="secondary-navigation">
        		<ul>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
				</ul>
         </nav>

      </aside><!-- #end left sidebar -->
    
<!-- content area -->    
      <div id="content" class="grid_8">
		<h1>H1 Header</h1>
        <p>your content goes here<br>
          <br>
          Responsive image:<br>
        <img src="images/pic4.jpg" width="960" height="400" alt="fill in">        </p>
      </div><!-- #end content area -->
      
 <!-- columns demo-->
<div id="columnsdemo">
<h2 style="width:100%; clear:both">Columns demo</h2>
<div class="grid_12"><h1>12</h1></div>

<div class="grid_1"><h1>1</h1></div>
<div class="grid_11"><h1>11</h1></div>

<div class="grid_2"><h1>2</h1></div>
<div class="grid_10"><h1>10</h1></div>

<div class="grid_3"><h1>3</h1></div>
<div class="grid_9"><h1>9</h1></div>

<div class="grid_4"><h1>4</h1></div>
<div class="grid_8"><h1>8</h1></div>

<div class="grid_5"><h1>5</h1></div>
<div class="grid_7"><h1>7</h1></div>

<div class="grid_6"><h1>6</h1></div>
<div class="grid_6"><h1>6</h1></div>
		
<div class="grid_4"><h1>4</h1></div>
<div class="grid_4"><h1>4</h1></div>
<div class="grid_4"><h1>4</h1></div>

<div class="grid_1"><h1>1</h1></div>
<div class="grid_2"><h1>2</h1></div>
<div class="grid_3"><h1>3</h1></div>
<div class="grid_3"><h1>3</h1></div>
<div class="grid_3"><h1>3</h1></div>
</div>
<!-- end columns demo -->  
      
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
	
</body>
</html>