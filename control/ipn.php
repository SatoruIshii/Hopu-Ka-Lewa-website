<?php
// TODO: Do syntax checking on Player ID's.  They could be user-edited in the JS.
/**
 *  PHP-PayPal-IPN Example
 *
 *  This shows a basic example of how to use the IpnListener() PHP class to 
 *  implement a PayPal Instant Payment Notification (IPN) listener script.
 *
 *  For a more in depth tutorial, see my blog post:
 *  http://www.micahcarrick.com/paypal-ipn-with-php.html
 *
 *  This code is available at github:
 *  https://github.com/Quixotix/PHP-PayPal-IPN
 *
 *  @package    PHP-PayPal-IPN
 *  @author     Micah Carrick
 *  @copyright  (c) 2011 - Micah Carrick
 *  @license    http://opensource.org/licenses/gpl-3.0.html
 */
define('SECURE_CONSTANT_IPN_f4ad6a26fd873896aec4f48f50208fe4',1); 
date_default_timezone_set('Pacific/Honolulu');
/* ------------------------------------------------------------------------
 * Start Configuration of Google Spreadsheet custom API
 * ------------------------------------------------------------------------
 */
// Where's Zend's Loader.php
define('SGS_ZEND_LOADER', 'Zend/Loader.php');
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/ZendGdata-1.12.3/library");
require_once 'credentials.php';
require_once '../model/dates.php';
// Lifted from the URL of Google Doc I want to work with
define('SGS_SHEET_ID', '1_qWaDnvkVLr5hv0-0xjewRnK86mxCFtQqoOxtQchIRk');
$sandbox_payee = 'photo-facilitator@claymckell.com';
$prod_payee = 'mondochun@juno.com';

// Include the API
require_once('sgs.php');

/* ------------------------------------------------------------------------
 * End Configuration
 * ------------------------------------------------------------------------
 */

/*
Since this script is executed on the back end between the PayPal server and this
script, you will want to log errors to a file or email. Do not try to use echo
or print--it will not work! 

Here I am turning on PHP error logging to a file called "ipn_errors.log". Make
sure your web server has permissions to write to that file. In a production 
environment it is better to have that log file outside of the web root.
*/
ini_set('log_errors', true);
ini_set('error_log', dirname(__FILE__).'/ipn.log');


// instantiate the IpnListener class
include('ipnlistener.php');
$listener = new IpnListener();


/*
When you are testing your IPN script you should be using a PayPal "Sandbox"
account: https://developer.paypal.com
When you are ready to go live change use_sandbox to false.
*/
$listener->use_sandbox = false;
#$payee = $sandbox_payee;
$payee = $prod_payee;

/*
By default the IpnListener object is going  going to post the data back to PayPal
using cURL over a secure SSL connection. This is the recommended way to post
the data back, however, some people may have connections problems using this
method. 

To post over standard HTTP connection, use:
$listener->use_ssl = false;

To post using the fsockopen() function rather than cURL, use:
$listener->use_curl = false;
*/

/*
The processIpn() method will encode the POST variables sent by PayPal and then
POST them back to the PayPal server. An exception will be thrown if there is 
a fatal error (cannot connect, your server is not configured properly, etc.).
Use a try/catch block to catch these fatal errors and log to the ipn_errors.log
file we setup at the top of this file.

The processIpn() method will send the raw data on 'php://input' to PayPal. You
can optionally pass the data to processIpn() yourself:
$verified = $listener->processIpn($my_post_data);
*/
try {
    $listener->requirePostMethod();
    $verified = $listener->processIpn();
} catch (Exception $e) {
    error_log($e->getMessage());
    exit(0);
}


/*
The processIpn() method returned true if the IPN was "VERIFIED" and false if it
was "INVALID".
*/
if ($verified) {
    /*
    Once you have a verified IPN you need to do a few more checks on the POST
    fields--typically against data you stored in your database during when the
    end user made a purchase (such as in the "success" page on a web payments
    standard button). The fields PayPal recommends checking are:
    
        1. Check the $_POST['payment_status'] is "Completed"
	    2. Check that $_POST['txn_id'] has not been previously processed 
	    3. Check that $_POST['receiver_email'] is your Primary PayPal email 
	    4. Check that $_POST['payment_amount'] and $_POST['payment_currency'] 
	       are correct
    */
    $errmsg = '';
    // DEBUG:
    $errmsg .= '\n' . json_encode($_POST) . '\n';
	// check whether the payment_status is Completed
  if ($_POST['payment_status'] != 'Completed') {exit(0);};
	// check that txn_id has not been previously processed
	// check that receiver_email is your PayPal email
  if ($_POST['receiver_email'] != $payee) {
    $errmsg .= "'receiver_email' does not match:";
    $errmsg .= $_POST['receiver_email'] . "\n";
  };
	// Check that payment_amount/payment_currency are correct
  $id_array = explode(',', $_POST['custom']);
  $npeople = array(
    "players" => 0,
    "guests" => 0
  );
  foreach ($id_array as $id) {
    if ($id[2] == '3') {
      $npeople["guests"] += 1;
    } else {
      $npeople["players"] += 1;
    };
  };
  unset($id);
  $payment_date = $_POST['payment_date'];
  $payment_date_proper = strtotime($payment_date);
  $fees = array(
    "guest" => 80,
    "regular" => 125,
    "late" => 150,
    "shame" => 180
  );
  $fees["player"] = ($payment_date_proper < $dates["indiv_late_start"] ? $fees["regular"] : ($payment_date_proper < $dates['indiv_shame_start'] ? $fees['late'] : $fees['shame']));
  $expected_amount = $npeople["players"]*$fees["player"] + $npeople["guests"]*$fees["guest"];
  $payment_amount = $_POST['mc_gross'];
  $writedata = array();
  for ($ind = 0, $len = count($id_array); $ind < $len ; ++$ind) {
    $writedata[$id_array[$ind]] = array(
      'amt'=>'',
      'meth'=>'',
      'date'=>$payment_date,
      'by'=>$_POST['first_name'] . ' ' . $_POST['last_name'] . ': ' . $_POST['payer_email']
    );
  }
  if ($payment_amount < $expected_amount) {
    // Possible fraud.
    $errmsg .= "'mc_gross' does not match.  For these player ID's:\n";
    $errmsg .= $_POST['custom'];
    $errmsg .= "\nWe expect payment of " . $expected_amount . ".\n";
    $errmsg .= "Instead we received " . $payment_amount;
    // Write alert to database.
    foreach ($writedata as $id => $val) {
      $writedata[$id]['amt'] = $payment_amount;
      $writedata[$id]['meth'] = 'FRAUD';
    };
    unset($val);
  } else {
    // Write results to database.
    foreach ($writedata as $id => $val) {
      $id_string = (string)$id;
      if ($id_string[2] == '3') {
        $writedata[$id]['amt'] = $fees['guest'];
        $writedata[$id]['meth'] = 'PayPal';
      } else {
        $writedata[$id]['amt'] = $fees['player'];
        $writedata[$id]['meth'] = 'PayPal';
      };
    };
    unset($val);
  }
  foreach ($writedata as $id=>$val) {
    sgs_walk('Form Responses', 'write_to_ss', 'playerid='.$id, $val);
  }
  unset($val);
  
  if (!empty($errmsg)) {
    error_log($errmsg);
    $body = "IPN failed fraud checks: \n$errmsg\n\n";
    $body .= $listener->getTextReport();
    mail('webmaster@hawaiiultimate.com','PayPal IPN Fraud Warning', $body, 'From: webmaster@hawaiiultimate.com');
  }
} else {
    /*
    An Invalid IPN *may* be caused by a fraudulent transaction attempt. It's
    a good idea to have a developer or sys admin manually investigate any 
    invalid IPN.
    */
    mail('webmaster@hawaiiultimate.com', 'Invalid IPN', $listener->getTextReport(), 'From: webmaster@hawaiiultimate.com');
}

function write_to_ss($data, $input) {
  $data['receivedamount'] = $input['amt'];
  $data['receivedmethod'] = $input['meth'];
  $data['receiveddate'] = $input['date'];
  $data['paidby'] = $input['by'];
  return $data;
}

?>