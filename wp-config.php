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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD',  '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

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
define( 'AUTH_KEY',         ':X,lak-sEhh!x{F{R$He8EeoSPeS%T/z+-kI{b`g#jF{c*h3^/i3nOq_%PpwjC|:' );
define( 'SECURE_AUTH_KEY',  'L?QNV67|50*`(h[j<s:>Z3#{nI32FhmV-+mI@^aTv<HiU:h`-Q8BkcSq<SJ:`Bg[' );
define( 'LOGGED_IN_KEY',    '62<,xd0,UygJtmPLKyY?oBm&d4qCQLV$kxxD_<xIpfINx</D{*jy(tdx<%/`oRL]' );
define( 'NONCE_KEY',        'oj~tR)d_S|]Xdhri6QyupYVm%B2E2)*]KVuI3&iI_,hB!HLR6M@|Yj?C{XD]h]2?' );
define( 'AUTH_SALT',        '#9`XDo!]JSb,j}#>!bj4M! G.7qA0Oo>da!{($tYBk!|R=(!6I>9L5YkSO`RV+,n' );
define( 'SECURE_AUTH_SALT', 'HGFqIUW*RHnAq@(;>qxb W;nKIbr^>#miw]Rk;6dk5#UI5E5k4/^U,Q)4%!x#5<|' );
define( 'LOGGED_IN_SALT',   '5<@,[6+Z?>S<qJo?TNZN$rBA?3f-:}~1Hz>R<*@A9^]=)./8`iQ]j8 iyR`:rZ$^' );
define( 'NONCE_SALT',       'm^aO.IE-`y!`CWAz$w,xz)6P $3[EJi8zM0uWg+|`OarC,,OR~OKzuGC&`PS[_qW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
