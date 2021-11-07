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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'concert' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.?Q T.%lpQU7I`l5Is #!?=,t6w<8aJZ5^+;%P5YLN[M<aBU+qF%1~U&:A-W2(,?' );
define( 'SECURE_AUTH_KEY',  'G@QOcWUPh6&_(.tn7AhF(tf}(Y I=!.4>q+_icNM|Rr!-ZWJq@cBbsd^,>zW]*x#' );
define( 'LOGGED_IN_KEY',    'oHl+<Bmfmr,H}Pf)#2xH!/X.niRQ=,/^g{{{=w?SMDcXI4ucp@OoX9IMOylZu^M:' );
define( 'NONCE_KEY',        'L.@<!Y 0T+o:(7^d=q 4$S~H4X!E`83n#gA+mS;D68A3}B52So|$=iB&4~U+pK4*' );
define( 'AUTH_SALT',        'n+T1r&Z6T7G5JmHV;05x7SNHk!m t)3-1ZhZKF9V(4teMBAtY9;oRo)!4,)b 6?R' );
define( 'SECURE_AUTH_SALT', 's|l6&aD9/?o<<FNh= YElGqi9<;eh##:}B/ZWUVpr%s^L-/E59U]FyynPcuhh[RS' );
define( 'LOGGED_IN_SALT',   'vNS!60:;0P~cO>c3/hk$Zf>+wLlH?RS4aOa#y:D{|47Ne{so*.UY283TvYOqr}wu' );
define( 'NONCE_SALT',       'Z>ybMZ2-^A&s?G]sPNCQqLBV$&8oSR#0GiNF|5%:l;RVc*G E!>{)U=X7X=5.84p' );

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
