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
define( 'AUTH_KEY',          '81]MDn_[+=8O>ii-CI>@o)qbzip#a<fUo}=CpIka)1/P0HsnZho_.,Nf@zm?,kXH' );
define( 'SECURE_AUTH_KEY',   'dcUFy~6]&,l(Y<Fwe/ ?K3/C&;K!Zl3*oc,A,cxp9.qlCM+L$~QdHUV|`h3>egQd' );
define( 'LOGGED_IN_KEY',     ']$RzSj&Ib1dG:x^4a--S@|,0<LJ;VYrirqX-Te%^ScnZkin!Woc=QH{(IT~j6aF)' );
define( 'NONCE_KEY',         'IU[D-fg3SE8wm8[*R(Oyo&:P):k(o1wJl% s[g*`[<Y/^r7J<hT bBmWI93qN2L[' );
define( 'AUTH_SALT',         'B X%?nKJr>o`W^SCXi^&Wuy!<v!TcBh#H/3@q1}-~l&d3EHG8y<BH%M~GWcxPR4o' );
define( 'SECURE_AUTH_SALT',  'r*Mq%yBbLN0d^riN~^|F8o$_3MK#@>y9`r$rUE-FB^v*a1k^9tr5qXBysABPhkb$' );
define( 'LOGGED_IN_SALT',    'y-)?JsneG_Z$.MA72sT0!8KV!h79M+zWd^lDB;Yb>!u:&a#8NG^vMgl}_jT2{x_C' );
define( 'NONCE_SALT',        'T![.8$NA)# i0Kt@yL{EBeB/z@x#^2/ZbPYvDt?fh{gR{IQ29 uHnA[CiNd=sWn>' );
define( 'WP_CACHE_KEY_SALT', 'y&3]l*$M{bE~2iZp`!A0a]uECPu+[}Q@<mZr%MLtV4.pIv[Npg|sZNtKJ+-Q#?DP' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
