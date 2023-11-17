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
define( 'DB_NAME', 'infinitecoldata' );

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
define( 'AUTH_KEY',         'L+2|X8efaiz#Bn78r}1?HsauSCbdqg<l;9>L/xO(3pe9*4#i)3v<U(#xSEN[(w3R' );
define( 'SECURE_AUTH_KEY',  '4qxq+`3[Rqn,,YU~V+>4RaMmjoq1fZNphMLDgo=/]pxU;YN_L$>!~&voD:=8]8{ ' );
define( 'LOGGED_IN_KEY',    ';/pD:=Z~O>3O#khB_^ T@/hJUwA*4gfx-ax&KAQw]b-}|&[k5P5*uMu`V}jw<?~w' );
define( 'NONCE_KEY',        '.z,kU|_t}|iJhHTsc.&&i!KsUd[#w)w X_3K-_Lkl&c0/p.C.}N5#cC@MSI<!O@R' );
define( 'AUTH_SALT',        '-Y7hY,E-|uh.lPBxy8*T?+)SC+x7~udQGHl%5={eyH?q`&rrsLVx3<f+iVn|49Gn' );
define( 'SECURE_AUTH_SALT', '>/VlR]o|!ZEw;u5Dgy};E056O{6(@&|`lhXm9(IDY~gZ#(IsU0)>ZD#0|9 _Icq<' );
define( 'LOGGED_IN_SALT',   'HaM-Yk%,$4+3&V9Frg-PV5Ed`$G%,?Ae`9(NK#LU4d6QK:aN)$2H{7p9MG%|L+3*' );
define( 'NONCE_SALT',       'wHnRk+wY<R SYH# fbe-RAluq0R%;l&GzNZ]o(Fg#AY~1E-TJog*m]>.z/|@C71Z' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
