<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_history.php');
$params = array(
  'pagetitle' => 'History',
  'description' => "History of Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, history, spirit, tradition',
  'champtable' => array(
    '2011' => array('Kumoniwannalayya','Superstition','Pirates','Butt Rainbow','Butt Rainbow','Clay "Dukes" McKell &<br/>Daniel Bailey'),
    '2010' => array('Captain Fatbeard','Caliaskawaii','Cyberninjas','Rowboat','Cyberninjas','Jess Kaneshiro &<br/>Joel Brunger'),
    '2009' => array('Mystery Machine','<i>No winner recognized</i>','','Pirates','','Curt Riffel'),
    '2008' => array('Party Van','Party Van','Aloha Spirit','','Party Van','Meg DeLisle'),
    '2007' => array('Hana Hou','Swingers & Dumpers','','','Swing of Fire',''),
    '2006b' => array('Hana Hou','Swing of Fire','Aloha Spirit','','Pirates','Ari Patz &<br/> Chris Garth'),
    '2006a' => array('Three Hour Tour','Three Hour Tour','','','Swing of Fire','Georgia Hart'),
    '2005' => array('Hana Hou','Three Hour Tour','Jabouti','Swingers & Dumpers','Sippin&#039 Sallys','Josh White'),
    '2004' => array('Hana Hou','Three Hour Tour','Forcing Zen','Spirit Team','Shock-N-Awesome','Brian G. &<br/>Joe Paradis'),
    '2003' => array('Diego En Fuego','Swingers & Dumpers','Lei My Chaminade','Maui Mana','Swingers & Dumpers','Heather Mitchell &<br/>Chris Hurwitz'),
    '2002' => array('Hana Hou','Swingers & Dumpers','ZenDisc','Spirit Team','Chaminade','<i>Too many<br/>to write on trophy</i>'),
    '2001' => array('Sugar Smacks','Swingers & Dumpers','Oregon Fighting Sheep','','Oregon Fighting Sheep','Mike Elhoff &<br/>Don Najita'),
    '2000' => array('Sugar Smacks','Swingers & Dumpers','','','ZenDisc','Mondo Chun'),
  ),
  'admintable' => array(
    '2012' => array('Maui','Chris Stevens','Laura Stevens, Vu Le, Don Najita, July Thomson, Kayleigh Hudson, Michelle Swan, Clay "Dukes" McKell, Scott Cooney'),
    '2011' => array('Hanalei, Kauai','Chris Stevens','Laura Stevens, Vu Le, Don Najita, July Thomson, Kayleigh Hudson, Michelle Swan, Sean Munnelly'),
    '2010' => array('Hawi, Big Island','Megan Grimshaw & Chris Stevens','Laura Stevens, Vu Le, Bill Voss, Becky Shor, Don Najita, Curt Riffel'),
    '2009' => array('Lahaina, Maui','Megan Grimshaw','Kevin Kelly, Ari Patz, Vu Le, Laura Stevens, Chris Stevens, Bill Voss, Becky Shor'),
    '2008' => array('Waimea, Kauai','Megan Grimshaw','Laura Gilda, Kevin Kelly, Ari Patz, Katelyn Allers, Vu Le, Laura Stevens, Chris Stevens'),
    '2007' => array('Hawi, Big Island','Laura Gilda','Kevin Kelly, Ari Patz, Katelyn Allers, Jason Sickmiller, Megan Grimshaw'),
    '2006b' => array('','Aaron Rosa','Kevin Kelly, Laura Gilda, Eric DeRuyeter, Jason Sickmiller, Kevin McGraw'),
    '2006a' => array('Waimea, Kauai','Kevin Kelly','Laura Gilda, Aaron Rosa, Eric DeRuyeter, Frances Ajo, Jason Sickmiller'),
    '2005' => array('Kaunakakai, Molokai','Laura Gilda','Rebecca Eldredge, Sara Simmons, Heather Mitchell, Kevin Kelly, Frank Dabrosky, Jason Sickmiller'),
    '2004' => array('Hana, Maui','Dave Strang','Laura Gilda, Rebecca Eldredge, Sara Simmons, Heather Mitchell, Kevin Kelly, Nate Adams'),
    '2003' => array('','Ignacio Lobos','Rebecca Eldredge, Chris Johnson, Leilani Durand, Sara Simmons, Karen Brimacombe, Carolyn Garvey, Bartlett Durand, Laura Gilda'),
    '2002' => array('','Ignacio Lobos','Rebecca Eldredge, Chris Johnson, Leilani Durand, Jim Teo, Karen Brimacombe, Ramzi Mirshak'),
    '2001' => array('Hanalei, Kauai','Ignacio Lobos','Scott Todd, Rebecca Eldredge, Chris Johnson, Leilani Durand, Jim Teo, Laura Gilda, Jacqui Ford'),
    '2000' => array('Hilo, Big Island','Corey Tyrrell','Michael Constantinides, Helga Mispelblom Beyer, Ignacio Lobos, Julie Najita, Rick Needham, Scott Todd')
  ),
  'slider' => array(
    array(
      'uri' => 'images/historyslides/ChrisStevens2006-DSCN4254.jpg',
      'caption' => 'Aloha Spirit: 2006b Penultimate Winner'
    ),
    array(
      'uri' => 'images/historyslides/ClayMcKell2010-_DSC1866.jpg',
      'caption' => 'Megan Grimshaw: Tournament Director 2008-2012'
    ),
    array(
      'uri' => 'images/historyslides/DonNajita2012-325928.jpg',
      'caption' => 'Pirates: 2011 Penultimate Winner'
    ),
    array(
      'uri' => 'images/historyslides/DonNajita2012-717799325_img_3033.jpg',
      'caption' => 'Pirates: 2009 Beer Bracket Winner'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan1980-743_4357.jpg',
      'caption' => 'Swingers & Dumpers: 2007 Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/2007-755_5572_v3-2.jpg',
      'caption' => 'Hana Hou: 2007 Champion'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-_MG_7168.jpg',
      'caption' => 'Ignacio Lobos: Tournament Director 2001-2003'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-_MG_8158.jpg',
      'caption' => 'Mystery Machine: 2009 Champion'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-ForcingZen.jpg',
      'caption' => 'Forcing Zen: 2004 Penultimate Winner',
      'credit' => 'Kaveh Kardan'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-Hopu04-0779.jpg',
      'caption' => 'Hana Hou: 2004 Champion'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-IMG_2995.jpg',
      'caption' => 'Party Van: 2008 Triple Crown'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-IMG_3060.jpg',
      'caption' => 'Kevin Kelly: Tournament Director 2006a'
    ),
    array(
      'uri' => 'images/historyslides/TomWhite2012-captain_fatbeard-2.jpg',
      'caption' => 'Captain Fatbeard: 2010 Champion'
    ),
    array(
      'uri' => 'images/historyslides/MarleyDegner2012-Kumonwannalayya.jpg',
      'caption' => 'Kumoniwannalayya: 2011 Champion'
    ),
    array(
      'uri' => 'images/historyslides/KeokiCooper2012-SwingofFire2007.jpg',
      'caption' => 'Swing of Fire: 2007 Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/LoriDaniels2005-hopu05-lorid_27.jpg',
      'caption' => 'Swingers & Dumpers: 2005 Beer Bracket Winner',
      'credit' => 'Lori Daniels'
    ),
    array(
      'uri' => 'images/historyslides/DanielBailey2012-Daniel.jpg',
      'caption' => 'Daniel Bailey: 2011 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/ChrisGarth2012-FB.jpg',
      'caption' => 'Chris Garth: 2006b Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/AllanRudwick2012-Rowboat.jpg',
      'caption' => 'Rowboat: 2010 Beer Bracket Winner'
    ),
    array(
      'uri' => 'images/historyslides/2012-HanaHou2005.jpg',
      'caption' => 'Hana Hou: 2005 Champion'
    ),
    array(
      'uri' => 'images/historyslides/KeokiCooper2012-SwingofFire2006b.jpg',
      'caption' => 'Swing of Fire: 2006b Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/JoelBrunger2012-pic5.jpg',
      'caption' => 'Joel Brunger: 2010 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2012-Ninja_mondo_IMG_20120222_013613-2-2.jpg',
      'caption' => 'Mondo Chun: 2000 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/MikeElhoff2012-Texas.jpg',
      'caption' => 'Mike Elhoff: 2001 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/ClayMcKell2011-_DSC5320.jpg',
      'caption' => 'Georgia Hart: 2006a Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/CurtRiffel2009-DSC_0442.jpg',
      'caption' => 'Curt Riffel: 2009 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2012-IMG_2109.jpg',
      'caption' => 'Chris Stevens: Tournament Director 2010-2012'
    ),
    array(
      'uri' => 'images/historyslides/KateYeske2012-ButtRainbow-Edit.jpg',
      'caption' => 'Butt Rainbow: 2011 Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/2012-SuperstitionBoatRace.jpg',
      'caption' => 'Superstition: 2011 Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/MikeLong2010-Caliaskawaii.jpg',
      'caption' => 'Caliaskawaii: 2010 Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/DonNajita2003-DonPopo.jpg',
      'caption' => 'Don Najita: 2001 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2012-THT2005.jpg',
      'caption' => 'Three Hour Tour: 2005 Boat Race Winner'
    ),
    array(
      'uri'=> 'images/historyslides/2012-THT2006a.jpg',
      'caption' => 'Three Hour Tour: Champions and Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/2006-Hopu2006Pirates.jpg',
      'caption' => 'Pirates: 2006b Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/RebeccaEldredge2012-ZenDisc2002PenUltimate.jpg',
      'caption' => 'ZenDisc: 2002 Penultimate Winner'
    ),
    array(
      'uri' => 'images/historyslides/RebeccaEldredge2012-ZenDisc2001.jpg',
      'caption' => 'ZenDisc: 2000 Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/2012-paga_pirate_2009.jpg',
      'caption' => 'Chris Hurwitz: 2003 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2012-007_5A.jpg',
      'caption' => 'Diego en Fuego: 2003 Champion'
    ),
    array(
      'uri' => 'images/historyslides/2012-Rob_Heather.jpg',
      'caption' => 'Heather Mitchell: 2003 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2010-_MG_0047.jpg',
      'caption' => 'Ari Patz: 2006b Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2012-Captain-Edit.jpg',
      'caption' => 'Jess Kaneshiro: 2010 Spirit Player'
    ),
    array(
      'uri' => 'images/historyslides/2012-SwingOfFire2006a.jpg',
      'caption' => 'Swing of Fire: 2006a Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/2012-sally_spirit.jpg',
      'caption' => 'Sippin Sallys: 2005 Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/2012-Jabouti.jpg',
      'caption' => 'Jabouti: 2005 Penultimate Winner'
    )
  )
);
foreach($params['slider'] as $k => &$v) {
  $temppath = str_replace('historyslides','historyslides/small',$v['uri']);
  $v['uri_small'] = str_replace('.jpg', '-small.jpg', $temppath);
}
$template->display($params);
?>