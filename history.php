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
    '2006b' => array('Hana Hou','Swing of Fire','BTP (California)','','Pirates','Ari Patz & Chris'),
    '2006a' => array('Three Hour Tour','Three Hour Tour','','','Swing of Fire','Georgia Hart'),
    '2005' => array('Hana Hou','Three Hour Tour','Jabouti','Swingers & Dumpers','',''),
    '2004' => array('Hana Hou','Three Hour Tour','Forcing Zen','Spirit Team','Shock-N-Awesome','Brian G. &<br/>Joe Paradis'),
    '2003' => array('Diego En Fuego','Swingers & Dumpers','Lei My Chaminade','Maui Mana','Swingers & Dumpers','Heather Mitchell &<br/>Mondo Chun'),
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
  )
);
$template->display($params);
?>