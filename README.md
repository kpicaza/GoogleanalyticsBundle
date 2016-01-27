Google Analytics Bundle
=======================

Twig extension to insert Google Analytics script in your templates

##Installation:

    composer require kpicaza/google-analytics-bundle=dev-master

Then activate in your app kernel
    
    // app/AppKernel.php
    class AppKernel extends Kernel
    {

        public function registerBundles()
        {
            $bundles = array(    
                ...
                new Kpicaza\Bundle\GoogleanalyticsBundle\KpicazaGoogleanalyticsBundle(),
                ...

##Usage:

Add the following helper function to your twig template:

    {{ ga_init('UA-XXXXXXXX-X') }}

