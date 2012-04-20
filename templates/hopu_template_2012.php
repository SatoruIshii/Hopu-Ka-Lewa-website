{% extends 'hopu_template_general.php' %}
{% block head %}
    {{ parent() }}
    <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
    <style type="text/css">
        #content { background: url(images/Hopucalypse-foot.png) bottom center no-repeat;
        }
    </style>
{% endblock %}
{% block subfootscript %}
    {{ parent() }}
    <script>
        $(document).ready(function(){
            $('header>nav').after('<div id="headgraphic" style="position:absolute; opacity:.85; z-index: 10;"><img src="images/Hopucalypse-head.png"/></div>')
        });
    </script>
{% endblock %}    