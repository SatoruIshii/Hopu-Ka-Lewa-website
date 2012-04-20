<!--
    /*
     * Hopu Ka Lewa webpage template.
     * written by Clay "Dukes" McKell, 2012.
     * clay@claymckell.com
     * 
     * Hello and welcome Hopu developer!
     * You've found the general template for all Hopu pages.  Congrats!
     * We're using the Twig templating system: http://www.twig-project.org/
     * Basically, this means that every new page you'll create should have the following PHP commands at the top:
     * 
     * &lt ? php
        require_once 'twig/lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
          'cache' => 'tmp/chache',
        ));
        $template = $twig->loadTemplate('hopu_template_2012.php');
        $params = array(
          'pagetitle' => 'Hat Draw',
          'description' => 'Outer island hat draw tournament.',
          'keywords' => 'Hawaii, ultimate, outer island, neighbor island, frisbee, ultimate frisbee, coed, hat, hat draw',
          'content' => 'Page content goes here.'
        );
        $template->display($params);
        ? &gt
     *
     * Other possible variables include:
     * 'slider' => array( array( 'uri' => 'path/to/image/file', 'href' => 'URL for link'), ... )
     * 'fbscript' => true  // Boolean to include Facebook like box initialization script or not.
     * 'customstyle' => array(
     *                  'selector' => array(
     *                      'attribute1' => 'value1', 'attribute2 => 'value2'
     *                      )
     *                  )
     * Basically you can include any last-minute custom CSS with this guy.
     * The page design below is based on the Yet Another Mobiler Boilerplage (YAMB): http://www.prowebdesign.ro/yet-another-boilerplate-for-responsive-mobile-web-design-yamb/
     * 
     */
-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
{% block head %}
    {% include 'base.html' %}
    {% include 'headCommonPreTitle.html' %}
    <title>{{ pagetitle ? pagetitle ~ ' | ' : '' }} Hopu Ka Lewa</title>
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="{{ keywords }}">
    <!-- CSS-->
    {% include 'headCommonPostTitle.html' %}
    {% if slider is defined %}
        <!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
        <script src="js/jquery.flexslider-min.js"></script>
    {% endif %}
    {% for selector, style in customstyle %}
        <style type="text/css">
            {{ selector }} {{'{'}} {% for attr, val in style %} {{attr}}:{{val}}; {% endfor %} {{'}'}}
        </style>
    {% endfor %}
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
      {% autoescape false %}
        {{ content }}  
      {% endautoescape %}
    <!-- #end content area -->
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
    {% include 'footerCommon.html' %}
</footer>
    
{% block subfootscript %}
<script type="text/javascript">
// Fireup the plugins
	$(document).ready(function(){
	// initialise menu
	jQuery('ul.sf-menu').superfish();
    
    {% if slider is defined %}
    	// initialise  slideshow
        $('.flexslider').flexslider({
            animation: 'slide',
            pauseOnHover: true
        });
        //TODO: Grab image widths here.  Then conditionally add padding-left to the li's that will center the image.
        //      Be sure to also add a window resize listener.
//        var imgwidths = $('.flexslider li img').width();
//        console.log(imgwidths);
        
    {% endif %}
	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});
</script>

{% if fbscript is defined %}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
{% endif %}
{% endblock %}

</body>
</html>