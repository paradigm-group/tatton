<?php

/**
 * All the themes required functions
 *
 * @package WordPress
 * @subpackage Tatton
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Add theme support and helper functions
 */
require_once('functions/theme-support.php');

/**
 * Include classes needed by the theme
 */
require_once('functions/classes/bootstrap-navwalker.php');

/**
 * Register menus
 */
require_once('functions/nav-menus.php');
add_action('init', 'ttRegisterNavMenus');


/**
 * Register custom post types
 */
require_once('functions/custom-post-types.php');
add_action('init', 'ttRegisterCustomPostTypes');


/**
 * Add stylesheets
 */
require_once('functions/stylesheets.php');
add_action('wp_enqueue_scripts', 'ttEnqueueStyles');


/**
 * Add javascript
 */
require_once('functions/javascripts.php');
add_action('wp_enqueue_scripts', 'ttEnqueueJs');