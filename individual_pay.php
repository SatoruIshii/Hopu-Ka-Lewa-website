<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2014.php');
require 'model/dates.php';
define('SECURE_CONSTANT_173945d5ecd6224993ffc110dfb30fa0', 1);
$params = array(
  'pagetitle' => 'Pay Individual Registration',
  'description' => "Payment portal for individuals registering for Hopu 2013.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player, payment, paypal'
  );
$css = array(
  "div#payment_instructions" => array("text-align"=>"left"),
  "div.select_pair_wrapper" => array("line-height"=>".75rem"),
  "form#registration label" => array("line-height"=>"1rem"),
  "form#registration select.player" => array("vertical-align"=>"top"),
  "form#registration button" => array(
    "-moz-appearance"=>"none", 
    "padding"=>".2rem", 
    "margin-top"=>".5rem", 
    "margin-bottom"=>".5rem"
    ),
  "div#payment_summary table" => array(
    "width"=>"100%", 
    "font-size"=>"110%",
    "margin-bottom"=>"1rem"
    ),
  "div#payment_summary table td" => array(
    "padding-top"=>"6px",
    "padding-bottom"=>"6px"
    ),
  "div#payment_summary table td:first-child" => array(
    "text-align"=>"left",
    "padding-left"=>".5rem"
    ),
  "div#payment_summary table tr:last-of-type" => array(
    "font-weight"=>"bold", 
    "border-top"=>"1px solid white"
    ),
  "div#payment_summary table tr:last-of-type td:first-of-type" => array("text-align"=>"right"),
  "div#reg_pay" => array("text-align"=>"center"),
  "p#time_warning" => array("font-size"=>"130%"),
  "option" => array("padding"=>"4px")
  );
$params['customstyle'] = $css;

$hgroup = <<<HGROUP
<hgroup class="grid_12">
  <h1>
    Give us all your lunch money
  </h1>
</hgroup>
HGROUP;
$content = '<section id="individual_pay">';
$content .= '<div id="payment_instructions" class="grid_12">';
if ($_SERVER['REQUEST_TIME'] < $dates["online_payment"]) {
  $content .= <<<CONTENT
    <p>
      After submitting your registration form, please find select your team and find your name below.
      You may pay for more than one person on a team by Control/Command-clicking names (may not work on all touch screen devices).
    </p>
    <p>
      When everyone has been selected, click "Calculate total" and check the names and prices.
    </p>
    <p>
      When ready, the "Buy Now" button will ask you to authorize the payment via PayPal.  
      You will receive a confirmation message to your PayPal email shortly.
    </p>
    <p>
      Disabled (gray-ed out) names indicate that person has already been paid for online.
    </p>
    <p>
      <strong>NOTE:</strong> We are currently experience significant delays (up to one hour) between registration and appearance in the payment form below.
      Please wait a bit and try again if you don't see your name at first.
    </p>
    <p>
      Any problems with registration or payments should be directed to <a href="mailto:webmaster@hawaiiultimate.com">the webmaster</a>.
    </p>
  </div> <!-- end div#payment_instructions -->
  <div id="reg_form" class="grid_6 mobile-grid-100 grid-parent">
    <form id="registration">
      <button id="calculate" class="grid_12 mobile-grid-100" type="submit">Calculate total</button>
    </form>
  </div>
  <div id="payment_summary" class="grid_6 mobile-grid-100">
    <table></table>
    <div id="reg_pay">
      <script src="js/paypal-button.min.js?merchant=mondochun@juno.com" 
          data-button="buynow" 
          data-name="Hopu16Registration" 
          data-amount="1" 
          data-shipping="0" 
          data-tax="0" 
          data-notify_url="http://hopukalewa.com/control/ipn.php"
          data-return="http://hopukalewa.com/paymentconfirmation.php"
      ></script>
    </div>
  </div>
CONTENT;
} else {
  $content .=<<<CONTENT
  <p>
    In order for us to have accurate records at the fields, we have closed online payment at this time.
  </p>
  <p>
    If you still need to register or pay, please bring your information and cash to the registration tent on Friday night or Saturday morning.
  </p>
CONTENT;
}
$content .= '</section> <!-- end section#individual_pay -->';
$params['content'] = $content;

$script = <<<SCRIPT
  jQuery(document).ready(function(){
    // Magic constants
    var prices = {'player_regular': 125, 'player_late':150, 'player_shame':180, 'guest': 80};
SCRIPT;

$script .= 'var now = new Date(' . json_encode(date('c',$_SERVER['REQUEST_TIME'])) . ');';
$script .= 'var deadline = new Date(1000*' . json_encode($dates["online_payment"]) . ');';
$script .= 'var fee_increase_late = new Date(1000*' . json_encode($dates["indiv_late_start"]) . '); console.log(fee_increase_late);';	
$script .= 'var fee_increase_shame = new Date(1000*' . json_encode($dates["indiv_shame_start"]) . '); console.log(fee_increase_shame);';
$script .= <<<'SCRIPT'
  prices['player'] = (now<fee_increase_late ? prices.player_regular : (now<fee_increase_shame ? prices.player_late : prices.player_shame));
    //deadline = new Date(Date.parse(now)+1000*30);
    console.log('Now:'); console.log(now);
    console.log('Deadline:'); console.log(deadline);
    if (deadline - now < 24*60*60*1000 && deadline - now > -2000) {
    displayTimeWarning(deadline-now);
    var interval = setInterval(clocktick, 1000);
  } 
  //	var latewarningDOM = document.getElementById("deadline_warning");
    function clocktick() {
    now = Date(Date.parse(now)+1000);
    var d = new Date(now);
    var s = (deadline-d)/1000;
    console.log("We are "+(d>deadline?"after":"before")+" the deadline.");
    if (d > deadline) {
      reloadWithinTime(deadline-d);
      prices['player'] = prices.player_late;
      $('p#time_warning').remove();
    } else {
      if (s > 3600) {
        $('span#increase_time').html(Math.floor(s/3600));
        $('span#increase_time_units').html('hour'+(Math.floor(s/3600)==1 ? '' : 's'));
      } else {
        if (s > 60 ) {
          $('span#increase_time').html(Math.floor(s/60));
          $('span#increase_time_units').html('minute'+(Math.floor(s/60)==1 ? '' : 's'));
        } else {
          $('span#increase_time').html(s);
          $('span#increase_time_units').html('seconds');
        }
      }
    };
  };
    var PAYPAL_ITEM_MAXLEN = 127;
    // Registration fanciness
	var $PPbutton = $('div#reg_pay');
	$PPbutton.hide();
    // Nifty Ajax methodology:
    // http://stackoverflow.com/questions/8840257/jquery-ajax-handling-continue-responses-success-vs-done
    var $regform = $('form#registration');
    console.log($regform);
    $regform.on('click', 'button.add_team', function(){
      var $all_fs = $regform.find('fieldset');
      var n = $all_fs.length;
      var $next_fs = build_team_list(n+1);
      $all_fs.last().after($next_fs);
    }).on('click', 'button.rem_team', function(){
      var $fs_to_remove = $(this).parent();
      $fs_to_remove.remove();
    });
    var $firstfs = build_team_list(1);
    $regform.prepend($firstfs);
    $regform.on('submit',function(e){
      e.preventDefault();
      var form_vals = $(this).serializeArray();      
      var players = [];
      var guests = [];
      var subtotal = 0;
      var all_ids = [];
      var all_names = [];
      $.each(form_vals.filter(function(el){return el['name'].match(/^players.*$/gi);}), function(ind,val){
        // Should be in the form [ ID, First  Last ]
        var item = val.value.split(',');
        all_names.push(item[1]);
        if (item[0][2] == 3) {
          subtotal += prices.guest;
          all_ids.push(item[0]);
          guests.push('<tr><td>'+item.slice(1).join()+'</td><td>$'+prices.guest+'</td></tr>');
        } else {
          subtotal += prices.player;
          all_ids.push(item[0]);
          players.push('<tr><td>'+item.slice(1).join()+'</td><td>$'+prices.player+'</td></tr>');
        };
      });
      if (subtotal > 0) {$PPbutton.show();};
      var table = '<tr><th>Name</th><th>Price</th></tr>';
      if (players.length > 0) {
        table += '<tr><td style="font-style:italic; padding:.25rem 1.5rem;">Players</td><td></td></tr>';
        for (var p = 0; p < players.length; p++) {
          table += players[p];
        };
      };
      if (guests.length > 0) {
        table += '<tr><td style="font-style:italic; padding:.25rem 1.5rem;">Guests</td><td></td></tr>';
        for (var g = 0; g < guests.length; g++) {
          table += guests[g];
        };
      };
      table += '<tr><td>Total:</td><td>$'+subtotal+'</td>';
      var $table = $('div#payment_summary table').html(table);
      var $paypal_button = $('form.paypal-button');
      var $amount = $paypal_button.find('input[name="amount"]').attr({"value":subtotal});
      var $custom = $paypal_button.find('input[name="custom"]');
      if ($custom.length > 0) {
        $custom.attr({"value":all_ids.join(',')});
      } else {
        $paypal_button.prepend('<input type="hidden" name="custom" value="'+all_ids.join(',')+'">');
      };
      var $itemname = $paypal_button.find('input[name="item_name"]');
      var all_names_string = 'Hopu16Registration for ';
      var name_to_add = '';
      var num_names_rem = 0;
      while (all_names.length>0) {
        if (name_to_add === '') {
          name_to_add = all_names.shift();
          all_names_string += name_to_add;
        } else if (all_names.length == 1) {
          name_to_add = ', and ' + all_names.shift();
          if (all_names_string.length + name_to_add.length > PAYPAL_ITEM_MAXLEN) {
            num_names_rem = 1+all_names.length;
            break
          }
          all_names_string += name_to_add;
        } else {
          name_to_add = ', ' + all_names.shift();
          if (all_names_string.length + name_to_add.length > PAYPAL_ITEM_MAXLEN) {
            num_names_rem = 1+all_names.length;
            break
          }
          all_names_string += name_to_add;
        }
      }
      if (num_names_rem > 0) all_names_string += ', and ' + num_names_rem + ' more';
      $itemname.attr({"value":all_names_string});
    });
  });

function reg_get(key,sheetname) {
  sheetname = (typeof sheetname !== 'undefined' ? sheetname : 'TeamSheetMap');
  return $.ajax("control/reg.php",{
      type: "GET",
      data: {
        'sskey':key,
        'sheetname':sheetname
      },
      dataType: "json"
  }).always(function(){
      // remove loading image?
      console.log("Trying to access SS with key: "); console.log(key);
  })
  .fail(function(jqXHR, textStatus, errorThrown) {
      // handle request failure
  });
};

function build_team_list(n) {
  var div_order = ["Teams","Guests"];
  var sskey_teams = "1mdTywaPgCPUk3gjtMJTHt3EFJyFfNNOhKrU59tOOhzk";
  var sskey_guests = "1obYBNSPGIttZfkZ8AY6wM-KpsreO7AHvLMVrmA5sHEk";
  var sskeys = [[sskey_teams], [sskey_guests]];
  var teamdic = {
    'playerid':'playerid',
    'firstname':'firstname',
    'lastname':'lastname',
    'team':'whatteamareyouplayingfor',
    'receivedamt':'receivedamount',
    'receiveddate':'receiveddate',
    'privatereg':'privatereg',
    'paymentmeth':'receivedmethod'
  };
  var $fieldset = $('<fieldset/>');
  var $teamselect = $('<select/>', {'id':'team'+n, 'name':'team'+n, 'class':'reg team'})
        .append('<option class="loading" value="" disabled="disabled" selected="selected">Loading teams...</option>');
  var $playerselect = $('<select/>', {'id':'players'+n, 'name':'players'+n, 'multiple':'true', 'class':'reg player'})
    .append('<option class="loading" value="" disabled="disabled" selected="selected">Waiting for team selection...</option>');
  $.when(reg_get(sskey_teams), reg_get(sskey_guests))
    .done(function(resp_teams,resp_guests){
      console.log("Teams response: "); console.log(resp_teams);
      var $teamgroup = $('<optgroup/>',{'label':'TEAMS'}),
        $guestgroup = $('<optgroup/>',{'label':'GUESTS'});
      $teamgroup.append(write_team_names(resp_teams,sskey_teams,'theseteamsarecoming.').join(''));
      $guestgroup.append(write_team_names(resp_guests,sskey_guests,'teamname').join(''));
      $teamselect.find('option.loading').remove();
      $teamselect.append('<option class="instructions" value="" disabled="disabled" selected="selected">Select a team...</option>')
        .append($teamgroup).append($guestgroup);
    }); // end .when.done
  $teamselect.change(function(){
    $playerselect.find('option').remove();
    $playerselect.append('<option class="loading" value="">Loading...</option>');
    // Know the value is passed of the form KEYSTRING,Sheet Name.
    var team_vals = $teamselect.val().split(',');
    reg_get(team_vals[0],team_vals[1]).done(function(data, textStatus, jqXHR){
      console.log(data);
      $playerselect.find('option.loading').remove();
      var data_array = data;
      var player_info = [];
      var $opt;
      if (data_array.length == 0) {
        $playerselect.append(
          $('<option/>',{
            'disabled':'true',
            'text':'Sorry, no players were found for this team.'
          })
        ).append(
          $('<option/>',{
            'disabled':'true',
            'text':'Please try again later.'
          })
        );
      } else {
        for (var p = 0; p < data_array.length; p++){
          player_info = data_array[p];
          if ( player_info[teamdic["privatereg"]] != 1 ) {
            $opt = $('<option/>', {
                'value':player_info[teamdic["playerid"]]+','+player_info[teamdic["firstname"]]+' '+player_info[teamdic["lastname"]],
                'text':player_info[teamdic["firstname"]]+' '+player_info[teamdic["lastname"]]
            });
            if (player_info[teamdic["paymentmeth"]]!=="" || player_info[teamdic["paymentmeth"]]=="FRAUD") {
              $opt.attr({'disabled':'disabled'});
              // Add help message explaining the grey-ness.
            };
            $playerselect.append($opt);
          };
        };
      };
    });
  });
  var $add_button = $('<button/>', {
    'class':"add_team grid_6 mobile-grid-50",
    'type':"button",
    'name':"add_team",
    'text':'Add team'
  });
  var $rem_button = $('<button/>', {
    'class':"rem_team grid_6 mobile-grid-50",
    'type':"button",
    'name':"rem_team",
    'text':'Remove team'
  });
  var $team_pair = $('<div/>', {'class':'grid-100 grid-parent select_pair_wrapper'})
    .append('<label for="team'+n+'" class="grid_2 mobile-grid-100">Team</label>')
    .append($teamselect.addClass("grid_10 mobile-grid-100"));
  var $player_pair = $('<div/>', {'class':'grid-100 grid-parent select_pair_wrapper'})
    .append('<label for="players'+n+'" class="grid_3 mobile-grid-100">Players and Guests</label>')
    .append($playerselect.addClass("grid_9 mobile-grid-100"));
  $fieldset.append($team_pair).append($player_pair)
  if (n==1) {
    $fieldset.append('<div class="grid_6"></div>').append($add_button);
  } else {
    $fieldset.append($rem_button).append($add_button);;
  };
  return $fieldset;
  // SUBFUNCTION
  function write_team_names(response,div_key,teamname_key) {
    var out = [];
    $.each(response[0],function(ind,val){
      out.push('<option value="' + div_key + ',' + val[teamname_key] + '">' + val[teamname_key] + '</option>');
    });
    return out;
  };
};

function displayTimeWarning(t){
  var $target = $('#payment_instructions');
  $target.append(
    '<p id="time_warning">'+
      'WARNING: Online payment will only be available for another '+
      '<span id="increase_time">'+
      ( t<1000*60*60 
        ?
        ( t<1000*60 ? t/1000 : Math.floor(t/1000/60) )
        :
        Math.floor(t/1000/60/60)
      )+
      '</span>'+
      ' '+
      '<span id="increase_time_units">'+
      ( t<1000*60*60 
        ?
        ( t<1000*60 ? 'seconds' : 'minute'+( Math.floor(t/1000/60)==1 ? '' : 's' ) )
        :
        'hour'+( Math.floor(t/1000/60/60)==1 ? '' : 's' )
      )+
      '</span>.  '+
      'This will result in the page being reloaded (and any progress will be lost), and you will have to pay at the fields on Friday or Saturday.'+
    '</p>'
  );
};

function reloadWithinTime(t){
  var tol = 1001;
  if (t<tol) location.reload();
  return null;
}
SCRIPT;
$params['pagejs'] = $script;
$template->display($params);
?>