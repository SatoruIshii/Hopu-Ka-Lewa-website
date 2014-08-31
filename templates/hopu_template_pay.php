{% extends 'hopu_template_2014.php' %}

{% block contentarea %}
<div id="content">
  <hgroup class="grid_12">
      <h1>Let's cross this Rubicon</h1>
  </hgroup>
  <section id="team_pay" class="grid_12">
    {% if hosted_button_id %}
      To pay the team bid fee, please use PayPal:
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="{{ hosted_button_id }}">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
    {% else %} {% autoescape false %}
      {{ reg_closed_content }} {% endautoescape %}
    {% endif %}
  </section>
</div>
{% endblock %}
