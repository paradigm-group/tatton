<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb_tatton');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(B~/n-Ko-[IA>vP8.qZy~7N|NPYzsO[F@1hUu^`Se(/0rS>347YL8?ianC+@[]an');
define('SECURE_AUTH_KEY',  '$=}_N#)Rj8Y,YM+m]1@,y0YrQ6z.lp,XkfC$^1~F&79 XapL/(kQj9E=lB@Eyyv2');
define('LOGGED_IN_KEY',    'K8>Sk#bllvBAFu.]OYobU>vdTN#(EWLVU?{Od5:g+[@3esuz},2%]M+|3 }79zqU');
define('NONCE_KEY',        '?-n=[k|yNzh>Jj+9&oT:cz.KR4-D.Rd!`|!g2Z#mj`hW5/NcP?^w`Cv%).Sns[6S');
define('AUTH_SALT',        'Afb5+QtlhqFqpf-m%W6Wcgvf8Yv|]~)<cB^^1i$ER;9k9 0@x+5>]wv+GyLXM2yG');
define('SECURE_AUTH_SALT', 'Z0HnX5A^`Uo]M+ekBG&F=0]|S6=P49uVi2ook,b0~nRF&_Jr5)-jO@y09WZ#MZeh');
define('LOGGED_IN_SALT',   '3LR?_FRc<]CvYJ_/.IB=]_@rimLTwwX?OJfF|=XMJ)D#-l|Hf,hOeH-!.qx=v@^m');
define('NONCE_SALT',       '7v^m/$ov7J7z{|WVQk ?s:%6<uI#n=/5z?PR [,%X)N+QY/L5{9ERP(9aSntZh{0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 't1m_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', FALSE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/**
 * Rename wp-content for a little extra security
 */
define('WP_CONTENT_FOLDERNAME', 'tim-assets');  
define('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/'); 
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME); 

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
define('DISALLOW_FILE_EDIT', true);