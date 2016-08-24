<?php
define( 'WP_MEMORY_LIMIT', '128M' );
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
define('DB_NAME', 'wpnat');

/** MySQL database username */
define('DB_USER', 'natad');

/** MySQL database password */
define('DB_PASSWORD', 'natural2502');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'M_?t}BQbc/J{|-H9XYC 2QNiGU0qqHGH=I(Hm<X;_)IErA}:2-$1KNU]C9aXOj%Z');
define('SECURE_AUTH_KEY',  '}1#OlYsvD#y4=8e*<-rFWj=<-YkEi5ZyJYUEHP4$-J&k4K9Dj^`/])d-0bWWhSNl');
define('LOGGED_IN_KEY',    'x<:u2r+uC7eH/t]~$,{|fc&+dNf=gfzC_%,3LE6@Z!%,SOLr[+P]-2SG?+X!UsHF');
define('NONCE_KEY',        'EujS?X.i,m}D(~>qtZ^~A5n,kH_`-Tc1|X?> yKziLbZR%cn70KaGl|Y)mdo&e+(');
define('AUTH_SALT',        'Sa]ISU&y*-#p]X+_G)E|1VH o,&P0bqD08-kQbP(*%l0^*7;v%*JC)eb#oG4.pvO');
define('SECURE_AUTH_SALT', '$MLAy;7dIY}xlDe{ganCdk5YY0UOa;0%|(5BGj-t(2f}%hZUX3GJ! (1TPf2h$Z^');
define('LOGGED_IN_SALT',   '}$.f5E}Tck_f2x0hGsrWYSM+M?=d ?Hww^,KLrI?%BUv5*gT;&|6n:-U2:cH!&EP');
define('NONCE_SALT',       '9XxIWE;9[2*?XE+!3Y[ZH,s((,&z>t_qEq`|Qnv8 =UsNMW-<$qdfMtr.x6_JuH0');
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




?>