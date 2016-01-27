Google Analytics Bundle
=======================

Twig extension to insert Google Analytics script in your templates

##Installation:

    composer require kpicaza/google-analytics-bundle

Then activate in your app kernel

                    new Kpicaza\Bundle\GoogleanalyticsBundle\KpicazaGoogleanalyticsBundle(),

##Usage:

Add the following helper function to your twig template:

    {{ ga_init('UA-XXXXXXXX-X') }}

