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
define( 'AUTH_KEY',         '{~#*r*nKjwjm&.f5Qq.1SG/NYa2F<bUaPbcqwl0?4h5KWmY+P+qY-`(Bm*qfc^*A' );
define( 'SECURE_AUTH_KEY',  '3p#!E1SQvfc,24P|8!Uhzc~UNUtpa3R%0ih`QvVRyrbZ4H;K@MOnEtmU*vx]-ruA' );
define( 'LOGGED_IN_KEY',    't[KU8_Zl7(M$So#)i@qxeo]6!wvRJ)A486$9u(q|4/Ow,m(X#fs,:3|Hd~-NwKp6' );
define( 'NONCE_KEY',        'YM^F*.>JKE5B:n0S9uI=-5hZjGft)K*i~-K[}X|S<VD_0qok/TZFY[8CJ_^S~c`a' );
define( 'AUTH_SALT',        'XkS`Strkn&>V-P^^E&.S|F$FR4#u{9uj._YEM.2Uj<|@8#We7yJv_o]}?[hC^.d3' );
define( 'SECURE_AUTH_SALT', '8Q38*L~]n%<].6L(,,WDW8kND;otR2[eAv#s${4xJ]`w}HE|&#rld;udz+fVQn{q' );
define( 'LOGGED_IN_SALT',   'pv1)V/>YX-C~-<:(>I[mMo$B%v:x5kp8+ak*?DE8Z%ao3|f;| 1Q:iu^MkWct(&5' );
define( 'NONCE_SALT',       'CzR/?s!-_K8&._a4m;v.%3PD|1N}H!f#1zd#BN<&*9@W~(4,BO.bE]K4b-Ufq)_+' );

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
