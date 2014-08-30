<?php
define('SECURE_CONSTANT_173945d5ecd6224993ffe110dfb30fa0',1);
date_default_timezone_set('Pacific/Honolulu');
require_once 'LV_settings.php';
$single_params = array(
    'tournament_id' => 'tournaments/',
    //'tournament_teams' => 'tournament_teams/',
    'team_id' => 'teams/'
);
$multiple_params = array(
    'tournaments' => 'tournaments/?tournament_ids=',
    'tournament_teams' => 'tournament_teams/?tournament_ids=',
    'teams' => 'teams/?team_ids='    
);
$url = '';
$curl = curl_init();
curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_HTTPHEADER => array(
          'Content-type' => 'application/x-www-form-urlencoded',
          'Accept' => 'application/json',
          'Authorization' => 'bearer ' . KK_LEAGUEVINE_ACCESS_TOKEN 
      )
  ));
foreach ($multiple_params as $k => $v) {
  if (isset($_GET[$k])) {
    $url = KK_LEAGUEVINE_API_URL . $v . urlencode($_GET[$k]) . '&access_token=' . KK_LEAGUEVINE_ACCESS_TOKEN;
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url
    ));
    break;
  }
}
foreach ($single_params as $k => $v) {
  if (isset($_GET[$k])) {
    $url = KK_LEAGUEVINE_API_URL . $v . $_GET[$k] . '/?access_token=' . KK_LEAGUEVINE_ACCESS_TOKEN;
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url
    ));
    break;
  }
}
$result = curl_exec($curl);
curl_close($curl);
$out1 = json_decode($result, true);
$out = array_merge($out1, array($url));
$outJSON = json_encode($out);
echo $outJSON;
?>