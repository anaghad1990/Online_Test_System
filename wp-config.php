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
define('DB_NAME', 'Online_Test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-pbhh]]/r#rx+LxGn~<>!Zpn$6q4uRh%hr#w4EgLiDwS32kH1{HrlS %LC.3?amo');
define('SECURE_AUTH_KEY',  'PBp%@`%jRSvX}y%E]ma0o69w7N l<3+(awGFYKj7oY)l2@YJa0T7eHxgQKM0(>WV');
define('LOGGED_IN_KEY',    '<1u4K9P(-W!nw_-$/{**ocb7k-OMF|}L/qrx]W0XX&4S=!ALXhn6dvW6{M-,4dJL');
define('NONCE_KEY',        'zVf?1Akk)($dq0T0Ut@;?%0bNC4/7D{F`g}UY*@_i9=28yZ-ePvJ?sJ 4QII<J-F');
define('AUTH_SALT',        '!u@1QLoUm]1:Sl.SijB}oCCJ[CY7mOt>d5@4`qgyDtaJ{^HO +0)Se]uga()QD`T');
define('SECURE_AUTH_SALT', '))NK+_>N`dW](i! N_2]x<GZ$Yc>itkOhW/F=a#@VA}Z4#|2r1&fA25sc%%,B362');
define('LOGGED_IN_SALT',   '~|%89`$rwmZrT-^.KKS#kwXRHPMs`$A>$2LOT%QY<qO*V?=bJQz/$^&/RY8SfTC-');
define('NONCE_SALT',       't0ur(wwK{?Cj4@helF,X;.L^F)+FHbI9jW]g8NZ{hgq_d%)L.lEyg1gDHo.Cq]j^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
