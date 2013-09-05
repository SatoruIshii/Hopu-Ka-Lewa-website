<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2013.php');
$params = array(
  'pagetitle' => 'Pay Individual Registration',
  'description' => "Payment portal for individuals registering for Hopu 2013.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player, payment, paypal',
  'content' => '
				<hgroup class="grid_12">
						<h1>
								Give us all your lunch money
						</h1>
				</hgroup>
				<section id="individual_pay" class="grid_12">
						To pay your individual registration fee online, please use PayPal:
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="YB3AECDHHBZP4">
							<table>
							<tr><td><input type="hidden" name="on0" value="Hopu High Tuition">Hopu High Tuition</td></tr><tr><td><select name="os0">
								<option value="Early Fee til September 30th">Early Fee til September 30th $120.00 USD</option>
								<option value="Late Fee October 2nd til October 29th">Late Fee October 2nd til October 29th $145.00 USD</option>
								<option value="Detention Fee October 30th til November 3rd">Detention Fee October 30th til November 3rd $175.00 USD</option>
								<option value="Prom Date (Guest)">Prom Date (Guest) $80.00 USD</option>
							</select> </td></tr>
							</table>
							<input type="hidden" name="currency_code" value="USD">
							<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<p>
							If you registered for more than one person, simply select one item, Add it to your Cart, and then select "Continue Shopping".
						</p>
				</section>
'
		);
$template->display($params);
?>