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
define( 'DB_NAME', 'maindb' );

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
define( 'AUTH_KEY',         'xir;oPE>nWoUzfjm( q*d~IH`rh}&.>x  m}RY9PYr!!/:o{6nml*T<dZm>{pt7j' );
define( 'SECURE_AUTH_KEY',  '3&k.P7<p+p,`X$*OO Xp10vd)r<tpfaMr;~`&>iD1cZ^0a%K@!p7WT1`qQ=ON4.8' );
define( 'LOGGED_IN_KEY',    '~VgT@{[8g>,lzTlfFvFFelUAA-jggFL6$)UsWs}[A1)TKS%)m&AnyD$q`b*r4q-P' );
define( 'NONCE_KEY',        '0.t68l6{2t[XeVN+sOXD+!Wz^nJGMl)<puK`b8$n4rZ.G7(5QMHZ;r52%o<ab_X|' );
define( 'AUTH_SALT',        '61_,p@;kD(^fqj)DuMjYQ(YbrfF9tc$yC1_HB6U3,6/A>}X,~O^oGTPO^E)eL@|J' );
define( 'SECURE_AUTH_SALT', 'trQ1$u{#,s#zm:;kN_xIr%$kX$q8`FQsl9De|%.M>]f+R*m%d+Ck|Z@v-6j4-*{7' );
define( 'LOGGED_IN_SALT',   'X@_5c8|-Fvrc~ZS&6W[q5+jsnROD=7MQ%oAi@z6<L5>/N+mv5%djE$hHOc)Rfs]r' );
define( 'NONCE_SALT',       'u4L77zvXcqp*O*`;0bdw14kQ,nJ~ZN2*mGx~koh3f@L/2fn&EX?OVwsj1AhF-5$E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
