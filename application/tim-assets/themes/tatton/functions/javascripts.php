<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * Javascript related functions
 *
 * @package WordPress
 * @subpackage Tatton
 */


/**
 * Enqueue custom javascript
 *
 * @author Jonny Frodsham
 **/
function ttEnqueueJs()
{
	if (!is_admin())
    {
    	wp_register_script('main-js', get_template_directory_uri() . '/assets/js/tatton.min.js', array('jquery'), '', filemtime(get_stylesheet_directory() . '/assets/js/tatton.min.js'), true);
    	wp_enqueue_script('main-js');
	}
}