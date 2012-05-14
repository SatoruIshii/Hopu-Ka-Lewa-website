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
    <link rel="stylesheet" href="css/style-min.120512.css" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/type/type.css">
    <link rel="stylesheet" href="css/custom.css">
    {% for selector, style in customstyle %}
        <style type="text/css">
            {{ selector }} {{'{'}} {% for attr, val in style %} {{attr}}:{{val}}; {% endfor %} {{'}'}}
        </style>
    {% endfor %}
    <!-- end CSS-->
    <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
    <script src="js/libs/modernizr.custom.70368.js"></script>
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
                      <div class="slider-image-container" data-small="{{ item.uri_small }}" data-large="{{ item.uri }}" data-small-width="406"
                        <noscript><img src="{{ item.uri_small }}"/></noscript>
                      </div>
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
        {% endif %}
      </div><!-- #end content area -->
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
  <!-- grab jQuery from Google SDN , fallback on local, if offline -->
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">google.load("jquery", "1.6.2");</script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  <!-- superfish menu by Joel Birch http://users.tpg.com.au/j_birch/plugins/superfish/ -->
  <script type="text/javascript" src="js/superfish/hoverIntent.js"></script>
  <script type="text/javascript" src="js/superfish/superfish.js"></script>
  <!-- responsive select menu by Matt Kersley. Turns ul / ol into select box https://github.com/mattkersley/Responsive-Menu -->
  <script type="text/javascript" src="js/jquery.mobileselect-min.js"></script>
  <!-- Polyfill for DETAILS element -->
  <script type="text/javascript" src="js/details.polyfill.min.js"></script>
  {% if slider is defined %}
    <!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
    <script src="js/jquery.flexslider-min.js"></script>
  {% endif %}
  <script type="text/javascript">
    // Fireup the plugins
    $(document).ready(function(){
      // initialise menu
      jQuery('ul.sf-menu').superfish();

      {% if slider is defined %}
        // Responsibly render images for slideshow.
        // Thanks to vasilisvg:
        // https://gist.github.com/1200270
        var windowWidth = $(window).width();
        $('.slider-image-container').each(function() {
          var $this = $(this),
          theSource = windowWidth < $this.data('small-width') ? $this.data('small') : $this.data('large');
          $this.html('<img src="' + theSource + '">');
        });
        // initialise  slideshow
        $('.flexslider').flexslider({
          animation: 'fade',
          pauseOnHover: true
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
    // modal setup
    // create variable to hold the current modal window
    var activeWindow;
    $('a.modalLink').click(function(e){
        // cancel the default link behaviour
        e.preventDefault();
        // find the href of the link that was clicked to use as an id
        var id = $(this).attr('href');      
        // find position in viewport.
        var topoff = $(window).scrollTop();
        var winheight = $(window).height();
        // Assume modal box is 400 pixels high.
        // assign the window with matching id to the activeWindow variable, move it to the center of the screen and fade in
        activeWindow = $('.window#' + id)
            .css('opacity', '0') // set to an initial 0 opacity
            .css('top', topoff+winheight-400) // position vertically at 50%
            .css('left', '50%') // position horizontally at 50%
            .fadeTo(500, 1); // fade to an opacity of 1 (100%) over 500 milliseconds
        // create blind and fade in
        $('#modal')
            .append('<div id="blind" />') // create a <div> with an id of 'blind'
            .find('#blind') // select the div we've just created
            .css('opacity', '0') // set the initial opacity to 0
            .fadeTo(500, 0.8) // fade in to an opacity of 0.8 (80%) over 500 milliseconds
            .click(function(e){
                closeModal(); // close modal if someone clicks anywhere on the blind (outside of the window)
            });
    });
    $('a.close').click(function(e){
            // cancel default behaviour
            e.preventDefault();
            // call the closeModal function passing this close button's window
            closeModal();
    });
    function closeModal() {
        // fade out window and then move back to off screen when fade completes
        activeWindow.fadeOut(250, function(){ $(this).css('top', '-1000px').css('left', '-1000px'); });

        // fade out blind and then remove it
        $('#blind').fadeOut(250,	function(){	$(this).remove(); });
    };
  });    
  </script>

{% if pagejs is defined %}
    <script>
        {% autoescape false %}
        {{ pagejs }}
        {% endautoescape %}
    </script>
{% endif %}

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