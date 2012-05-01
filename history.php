<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_history.php');
$params = array(
  'pagetitle' => 'History',
  'description' => "History of Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, history, spirit, tradition',
  'champtable' => array(
    '2011' => array('Kumoniwannalayya','Superstition','Pirates','Butt Rainbow','Butt Rainbow','Clay "Dukes" McKell &<br/>Daniel Bailey'),
    '2010' => array('Captain Fatbeard','Caliaskawaii','Cyberninjas','Rowboat','Cyberninjas','Jess Kaneshiro &<br/>Joel Brunger'),
    '2009' => array('Mystery Machine','<i>No winner recognized</i>','Pirates','','','Curt Riffel'),
    '2008' => array('Party Van','Party Van','Aloha Spirit','','Party Van','Meg DeLisle'),
    '2007' => array('Hana Hou','Swingers & Dumpers','','','Swing of Fire',''),
    '2006b' => array('Hana Hou','Swing of Fire','BTP (California)','','Pirates','Ari Patz &<br/> Chris Garth'),
    '2006a' => array('Three Hour Tour','Three Hour Tour','','','Swing of Fire','Georgia Hart'),
    '2005' => array('Hana Hou','Three Hour Tour','Jabouti','Swingers & Dumpers','',''),
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
      'caption' => 'Aloha Spirit: 2006 Spirit Team'
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
      'caption' => 'Pirates: 2009 Penultimate Winner'
    ),
    array(
      'uri' => 'images/historyslides/DonNajita2012-DSC05627.jpg',
      'caption' => 'Pirates: 2006b Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan1980-743_4357.jpg',
      'caption' => 'Swingers & Dumpers: 2007 Boat Race Winner'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2007-747_4788.jpg',
      'caption' => 'Swing of Fire: 2007 Spirit Team'
    ),
    array(
      'uri' => 'images/historyslides/KavehKardan2007-755_5598.jpg',
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
      'uri' => 'images/historyslides/KavehKardan2012-Hopu04-0016.jpg',
      'caption' => 'Forcing Zen: 2004 Penultimate Winner'
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
    )
  ),
);
$template->display($params);
?>