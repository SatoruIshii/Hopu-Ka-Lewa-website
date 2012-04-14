<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title>My first Twig template</title>
    </head>
    <body>
        My name is {{ name }}.  This is some other text.
        My friends are:
        <ul>
            {% for person in friends %}
            <li>{{ person.firstname }} {{ person.lastname }}</li>
            {% endfor %}
        </ul>
        {% include 'includeme.html' %}
    </body>
</html>