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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'X{CxyL3k3(:tE5]PB(G~RI}b =.(r%cO.9[JZRv.6|;AOdTK;XkB@|{@.$tLn3z4' );
define( 'SECURE_AUTH_KEY',  'so/%S g`KJN=lk8~!sz,O&PvC~Ff/Ane44]jZN !JFD]0xW*bXl.K+;<) ^ bW9;' );
define( 'LOGGED_IN_KEY',    'tqMk3nK*xE%o;1g)H|82t/m@*x)&Z&ZkwXpM7z4-P,YmVz/* TP,,5OS#&kk-%4j' );
define( 'NONCE_KEY',        '_Sp)Mo1aO&2;(o`3yAKiU*beyL}J^>hljC*S~BXh(s&77.vEqgVNB@n%3V@[,!OS' );
define( 'AUTH_SALT',        '+/|BAXF oss7KfLHja0K$G=}t*KSYh?bmXGg-8-aa_{2fu)Xqv`;/.Ga#73g3 {g' );
define( 'SECURE_AUTH_SALT', '##qf{.{yW0@tTD8Y/pX/$$0_6^}&NX-b]6tbNjde=p:<lp2Yb8Rx2:VaSLs;&,oY' );
define( 'LOGGED_IN_SALT',   's;x<I;!([F$UNd5P>qc,<Ho#q7iYT(p5zR |r`|JPi*o[JNrhf^XtVWI_/4V;ks5' );
define( 'NONCE_SALT',       'Otu{}(+Eo1?jQfK x|yvSUg]HKy$sUr:gX=+n=5V1V);CcF>M8ghDV}%o>(d4pZ#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
