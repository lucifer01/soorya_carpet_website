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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_#wd)iYOP}rVSI}oerx=Nf*:0Ncy 0 ~7ZDaNUBk[hDNEBwNo;_(W?k2luf$48&3' );
define( 'SECURE_AUTH_KEY',  'htFy[5:[(E7I,oO86e;}P$v*2#v:+Ry/OU|w5wg!rtpj$eC#oSue+Z9mw>2VZ^IP' );
define( 'LOGGED_IN_KEY',    ',E~[@NGxa7fvR^H$[Gx41N{`f;`]GJkp99ka;j$O94eH;~vw,,S{PGxP9@{e8Jys' );
define( 'NONCE_KEY',        'tl**xJdAPO!6wpLCtbPXLS@`l&??iX<xtAos&hba]0z,E?J)>5X!xK0RtAO^3r-d' );
define( 'AUTH_SALT',        '$H]U{l3j}t=Xs?DFYklb=nBRNXVK fVC/J^I]J7phc~rN D,p2=Fn%H++oA$5zmN' );
define( 'SECURE_AUTH_SALT', 'y9=iB$#aE:PIh]`u1E]ljbJ=[[}4D.~Q,6Pu+aMu_?a[v`Ueu+]Y}%%VUgtFXu!f' );
define( 'LOGGED_IN_SALT',   '=w,v:b)TC2nH]xxVRmY~UPihXR074< %(%4cREO(rb,tvvUxx;2hQnMgHipm0gN&' );
define( 'NONCE_SALT',       '1^,(H+) fcWWoKHnAU09kj bkh/~(hJU#W%GZo0o,ni<7n(j~J@EwV&_lkuWY$HJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

