{% extends 'hopu_template_general.php' %}

{% block logo %}
    <img id="logo" src="images/Hopu14Logo.jpg" />
{% endblock %}

{% block head %}
    {{ parent() }}
    <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
{% endblock %}

{% block footimage %}
    <img src="images/Hopucalypse-foot.jpg" alt="Apocalypse comes to Waimanalo." />
{% endblock %}

{% block subfootscript %}
    {{ parent() }}
    <script>
        $(document).ready(function(){
        // Adjust logo size.
            var titleline = $('#banner > hgroup h1');
            var lh = titleline.css('line-height');
            var lhnf = parseFloat(lh.replace('px',''));
            if (lhnf*0===0) {
                //Good.  The css returned a pixel value.
            }
            else {
                // Too bad, css command returned junk.  Here's a hack that assumes lineheight is 1.5*font size.
                var fs = titleline.css('font-size');
                lhnf = Math.floor(parseInt(fontSize.replace('px',''))*1.5);
            }
            // Set the aesthetic proportions.
            var padfactor = 0.13;
            var aspectratio = 0.96;
            $('#logo').css({
                'padding': Math.floor(lhnf*padfactor),
                'max-height':lhnf - 2*Math.floor(lhnf*padfactor),
                'max-height':Math.floor(aspectratio*(lhnf - 2*Math.floor(lhnf*padfactor)))
            });
        // Insert top graphic with inline style.
            $('header>nav').after('<div id="headgraphic" style="position:absolute; opacity:.85; z-index: 10; padding-top:16px; max-width:100%;"><img src="images/Hopucalypse-head.png" style="max-width:100%; height:auto;"/></div>');
            // If no flexslider, give the content div some headroom.
            if ($('div.flexslider').length<=0) {
                var imh = $('div#headgraphic>img').height();
                $('#content').css('margin-top',imh*0.9);
            }
        });
    </script>
{% endblock %}    