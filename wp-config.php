<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'multisite-dev.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'AUTH_KEY',          'qxPPO8Jz_K]_u<7yl@~.WI [bX + eV`^~53g4cV?}(Mi?P8kkTd9pH;_).p-Z_.' );
define( 'SECURE_AUTH_KEY',   ',5>:z!tj$^%RaeeF2=GJF?3>,[D|RZ%Eio~ <K3mu,94+vcmd(S/D$z$S^SlwG,3' );
define( 'LOGGED_IN_KEY',     'k_XS5zuzZRs_:q(R6zij9px#fLr=sU02Z0Rm[KnIFwm2%bxoLLkU,o$!YM5x,oy=' );
define( 'NONCE_KEY',         '<oirD*k!MeU/^gU5~t!wk#G3AsEgwSY!acw_ogRw]x}Z=%(Qdk|X;So#uUWLD>^ ' );
define( 'AUTH_SALT',         'y&_2qD^T _xe),tj7c9[d_g0URJ(Lz(`[5-EBPqEgg2;Mcinllq!:IA*-KC=lo:M' );
define( 'SECURE_AUTH_SALT',  '(v0!:sT<4xM4OKUJ<xlk:#z=B%/7<&P@Z}2f%#)q4dj<oiDRHWVV92:YeoOik%xa' );
define( 'LOGGED_IN_SALT',    'e0,L6n_04l`{dZ*K(b3kRo^)Azc~yo&`-%@/ORbyiAao{T`dOZuu|x)vQEpZX5K[' );
define( 'NONCE_SALT',        '$:F%I7MS1~OF5T0|%x_aA!VQau_sbil6;$fc/MZr{k $cZyd;YnT8EL;WDp67GTm' );
define( 'WP_CACHE_KEY_SALT', '0bdjO^c+%HxlCb9B5T4qwSKU0EdJDn,|bJKWQ},bA;f4&]@M,RrrbTil=>#0 [&E' );
