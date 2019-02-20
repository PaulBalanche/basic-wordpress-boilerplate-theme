<?php
/**
 * "Slider" controller
 *
 */



/**
 * That's all, stop editing! Happy blogging.
 * One last thing to do: Timber render function
 *
 */
if( class_exists("Timber", false) ) {
   Timber::render( "slider.twig", $context );
}