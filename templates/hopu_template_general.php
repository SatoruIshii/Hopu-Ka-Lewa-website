<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
{% block head %}
    {% include 'base.html' %}
    {% include 'headCommonPreTitle.html' %}
    <title>{{ pagetitle }} | Hopu Ka Lewa</title>
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="{{ keywords }}">
    <!-- CSS-->
    {% include 'headCommonPostTitle.html' %}
    {% if slider is defined %}
        <!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
        <script src="js/jquery.flexslider-min.js"></script>
    {% endif %}
{% endblock %}
</head>
<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
    {% block header %}
		       
        <div id="banner">            
			<hgroup>
			  <h1>HOPU KA LEWA</h1>
			</hgroup>            
        </div>
        
        <nav id="topnav" role="navigation" class="clearfix">  
        	{% include 'navbar.html' %}
		</nav><!-- #access -->
        {% if slider is defined %}
           <div class="flexslider">
               <ul class="slides">
                   {% for item in slider %}
                   <li>
                       {% set hrefexists = item.href is defined %}
                       {% set captionexists = item.caption is defined %}
                       {% if hrefexists %}
                           <a href="{{ item.href }}">
                       {% endif %}
                        <img src="{{ item.uri }}"/>
                       {% if hrefexists %}
                           </a>
                       {% endif %}
                       {% if captionexists %}
                            <p class="flex-caption">{{ item.caption }}</p>
                       {% endif %}
                   </li>
                   {% endfor %}
               </ul>
           </div>
       {% endif %}
    {% endblock %}
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">

    
<!-- content area -->    
      <div id="content" class="grid_12">
          {% autoescape false %}
            {{ content }}
            
          {% endautoescape %}
      </div><!-- #end content area -->
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
    {% include 'footerCommon.html' %}
</footer>
    
<script type="text/javascript">

// Fireup the plugins
	$(document).ready(function(){
	// initialise menu
	jQuery('ul.sf-menu').superfish();
    
    {% if slider is defined %}
    	// initialise  slideshow
        $('.flexslider').flexslider();
    {% endif %}
	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});

</script>
	
</body>
</html>