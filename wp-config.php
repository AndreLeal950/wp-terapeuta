<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'terapia' );

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
define( 'AUTH_KEY',         '`VDV4x(H%C)Ngo^C+J_U@I^Ng -mPnQ+YzbG`353^Hz%CXeac~Lh|V2^c[+ijcg]' );
define( 'SECURE_AUTH_KEY',  '^-aFTV9rfY4|I)!tunzRlAw6/Hm v$<>OC*!K16L1t</OT7tP;JmQ@?K6[msPw!O' );
define( 'LOGGED_IN_KEY',    'R)_m&!7?xl3x:oOJv]+EiVHj,3mFIASN[:X2{M.t0]!u+)7ydu1*)jvzLZE>zNHq' );
define( 'NONCE_KEY',        ' w%AfHaPFGo:#NV&-MXgrhK9`SEibSCr|pr-!^`oS>,faD-W AK7Qi/r/%]A8`p&' );
define( 'AUTH_SALT',        'CL),3H$p5J881Udx>OYXTwJ|5=$)f;?#.##0[vy.P$K@t#!j{nr@MW9`P~+d`t5#' );
define( 'SECURE_AUTH_SALT', 'Bayg%,seXwKRDm#g|(i-m)[qPZ(v/*ZO!^~wCa7c!HLubygJ-y`M0ybbu^e/B`pk' );
define( 'LOGGED_IN_SALT',   '7{|`/YO`s+jaZ:s<,1VCkb.f]s@7%7xzn277[72~u9c)zrV)1V9h.r}JK8Xm|I&]' );
define( 'NONCE_SALT',       'ojxJe_:T.u?GoISh7 JwinPrL:[sK-aWWP4(s;{RVMG5X,?M7n(&3wn#bo+o;!Mz' );

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
