Hopu Ka Lewa's Website
======================

Aloha!

We're trying to modernize and redesign the Hopu Ka Lewa tournament website.  We're keeping the development work on GitHub, so if you'd like to help, give it a fork!

Mahalo,
The Hopu Committee

Instructions for developers
---------------------------

### Installation

For local development:
+ Clone this [repository](https://github.com/kcmckell/Hopu-Ka-Lewa-website) to your machine.
+ Create the file `templates/base.html` with a single line: `<base href="local/server/path/to/root" />`.
+ Profit.

### Issues

Please refer to the [issues page](https://github.com/kcmckell/Hopu-Ka-Lewa-website/issues?labels=&milestone=&state=open) for current topics that might need work.

<!--
    /*
     * Hopu Ka Lewa webpage template.
     * written by Clay "Dukes" McKell, 2012.
     * clay@claymckell.com
     * 
     * Hello and welcome Hopu developer!
     * You've found the general template for all Hopu pages.  Congrats!
     * We're using the Twig templating system: http://www.twig-project.org/
     * Basically, this means that every new page you'll create should have the following PHP commands at the top:
     * 
     * &lt ? php
        require_once 'twig/lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
          'cache' => 'tmp/chache',
        ));
        $template = $twig->loadTemplate('hopu_template_2012.php');
        $params = array(
          'pagetitle' => 'Hat Draw',
          'description' => 'Outer island hat draw tournament.',
          'keywords' => 'Hawaii, ultimate, outer island, neighbor island, frisbee, ultimate frisbee, coed, hat, hat draw',
          'content' => 'Page content goes here.'
        );
        $template->display($params);
        ? &gt
     *
     * Other possible variables include:
     * 'slider' => array( array( 'uri' => 'path/to/image/file', 'href' => 'URL for link'), ... )
     * 'fbscript' => true  // Boolean to include Facebook like box initialization script or not.
     * 'customstyle' => array(
     *                  'selector' => array(
     *                      'attribute1' => 'value1', 'attribute2 => 'value2'
     *                      )
     *                  )
     * Basically you can include any last-minute custom CSS with this guy.
     * The page design below is based on the Yet Another Mobiler Boilerplage (YAMB): http://www.prowebdesign.ro/yet-another-boilerplate-for-responsive-mobile-web-design-yamb/
     * 
     */
-->