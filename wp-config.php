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
define( 'DB_NAME', 'pruebauno_db' );

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
define( 'AUTH_KEY',         'jm+:QEWo+;}_A^)Im5nNDn:^4=5tGuy)@a1~b2?8GNi>F9Q>~zv43@M<<QUwy7r$' );
define( 'SECURE_AUTH_KEY',  'jJAF+n-d](Gty|FiGjj$.{)%`Yxz[Xf}?q~]0Hs?(P[XoXLV;<r:l&7&P&_?7D<d' );
define( 'LOGGED_IN_KEY',    'r+]$zl(GiI[Y~L[v>`>NS5w}UWln,WHoQA!LD7YD,|7mV}gJy?!2,o@pc=g&Su5m' );
define( 'NONCE_KEY',        'Cj!S^K!>P798ODN+5JM+6)OlU`q/t_j7D6d%T97ns4@I,Ar8iL:gzA}~J~0mLF<.' );
define( 'AUTH_SALT',        'j3 P6=z64|Ju-ZV6(T.K`-&MDgUApG#>3}ENBpKW$b<[B1Md[mpF_Ylg)h~^kNY2' );
define( 'SECURE_AUTH_SALT', 'PIC:!uv<.CN?m=ZsK4K4Y+L>;bAFQA--D{<xTRSuXBdW]k,l])AQSL{nr|p^l>[3' );
define( 'LOGGED_IN_SALT',   's(H,phmI^rKX4CsbWotIK:{r(}-[ag8DY=)N*=Ayrf5;F6QNTANLdG]O?SFv&4Q=' );
define( 'NONCE_SALT',       'c#g BT6 Nt/v`[]CGgCd*EYP:,NMF5R&88,&BXBtn8&Bedu3?fMYzXm0 +|mGZ9}' );

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
