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
                <h1>{% block logo %}{% endblock %}HOPU KA LEWA</h1>
			</hgroup>            
        </div>
        
        <nav id="topnav" role="navigation" class="clearfix"> 
            <ul class="sf-menu" id="mobileselect">
                {% include 'navbar.html' %}
            </ul>
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

    {% block contentarea %}
    <!-- content area -->
    <div id="content">
      {% autoescape false %}
        {{ content }}  
      {% endautoescape %}
      {% if googleform %}
            <section id="{{ googleform.id }}" class="grid_12 googleform">
                {% if googleform.active %}
                    <iframe src="{{ googleform.src }}" width="98%" height="{{ googleform.height is defined ? googleform.height : '1000px' }}">Sorry, it appears that your browser does not support inline frames (iframes).  Please <a href="{{ googleform.src }}">register using the Google form</a>.</iframe>
                {% else %}
                    Sorry, no can register now.
                {% endif %}
            </section>
        <!--<iframe src="{{ indregurl }}" width="740" height="1500" frameborder="0" marginheight="0" marginwidth="0">It appears that your browser does not support iframes.  Please <a href="{{ indregurl }}">register using the Google form</a>.</iframe>-->
    {% endif %}
    </div>
    <!-- #end content area -->
    {% endblock %}
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
    {% use 'footerCommon.html' %}
    {% block footerCommon %}
        {{ parent() }}
    {% endblock %}
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
            animation: 'fade',
            pauseOnHover: true,
            randomize: true
        });
        
    {% endif %}
	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
$('#mobileselect-foot').mobileMenu({
        switchWidth: 480,
        indentString: '&nbsp;'
    });
	});
    
</script>

{% include 'analytics.html' %}

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