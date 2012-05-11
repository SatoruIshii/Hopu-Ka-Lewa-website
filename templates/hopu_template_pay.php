{% extends 'hopu_template_2012.php' %}

{% block contentarea %}
    <div id="content" class="grid_12">
          <hgroup>
              <h1>Where are the Effing Twinkies?</h1>
              <h2>Where are you, you spongy, yellow, delicious bastards?</h2>
          </hgroup>
          <section id="team_pay" class="grid_12">
              To pay the team bid fee, please use PayPal:
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="563799WLT7CQL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
          </section>
{% endblock %}