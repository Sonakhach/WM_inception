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
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'myuser' );

/** Database password */
define( 'DB_PASSWORD', 'userpassword123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'hWD[M`$O:bat.J6:y~[cF2t=H-v;a}c=WjNH,?5xr%t@nTC|=X7uAlE#;m-Hc1IB' );
define( 'SECURE_AUTH_KEY',   'B(<)xjeMg@yo5HMv55MY`!a*~{^(I&;4PpYe%7QKzqfb)*DB6bb3hV/oP]h/6N)8' );
define( 'LOGGED_IN_KEY',     'nA0OD;/VXy%GWg/Uimzw940AonAgM&,c~loEDkYnxHt}ax3^-* rZuIeH7Rf<Mc7' );
define( 'NONCE_KEY',         'Q5#t.UNt x7hQ]jL0/=de8[WVPg9^L)PNH* ]A*ym(3B&jE+yr?lbW2APQ,k2q>{' );
define( 'AUTH_SALT',         'nGh]Ea5H~}jgP@$_R/zDC;VBZ`tUjTu;rqt!/]}3`=7MZNM0`xM|B)wj&6gvF7Yb' );
define( 'SECURE_AUTH_SALT',  'N]2vPTKA;-=|/-}LK)3NDp4*EW5yOU1!}g<CM,?)`)0|gO1929chbCVv5:Rh:9!^' );
define( 'LOGGED_IN_SALT',    'x+~I:g3gGP{Vb-(Y+EXNkS!Uw-wb;?7w*H>D=t0DbI69{%HD>heF:p=b@7 /vF;B' );
define( 'NONCE_SALT',        '4C8ptffq8| :s-}E;/hx,hyCFuYO#<~ZXPO0}$jyXhYBZCT[t+q3)n8[64imS84Y' );
define( 'WP_CACHE_KEY_SALT', 'Y&!poGm+^1[c!xYXO[5hH)]|Pt**4R_oJQZYO@/N4FOBpT%Nbm 9]hqobu2=w~yV' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
