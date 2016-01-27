<?php

// src/AppBundle/Twig/AppExtension.php

namespace Kpicaza\Bundle\GoogleanalyticsBundle\Twig;

/**
 * MetricsExtension
 */
class GAExtension extends \Twig_Extension
{

    /**
     * 
     * @return type
     */
    public function getFunctions()
    {
        return array(
          'ga_init' => new \Twig_SimpleFunction('ga_init', array($this, 'initAnalyticsScript'), array(
            'is_safe' => array('html'),
            'needs_environment' => true,
              )),
        );
    }

    /**
     * 
     * @param type $class
     * @return string
     */
    public function initAnalyticsScript(\Twig_Environment $twig, $ua , $roles = array())
    {
        return $twig->render('KpicazaGoogleanalyticsBundle:Twig:ga_init.html.twig', array(
              'ua' => $ua
        ));
    }

    public function getName()
    {
        return 'ga_extension';
    }

}
