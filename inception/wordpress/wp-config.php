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
define( 'AUTH_KEY',          'd:y(u<<#}EA:!p5~Oq,qP4O,<g83 sNVr 4Oe/SA`SP7jM>Yffx(pz%Fn?u5_P J' );
define( 'SECURE_AUTH_KEY',   'm3]IjEmkzO78@^8%n>q|[cY<n3yxA.ZWwk<H3KJ%Xa8QN=[~q2y~Fsy|*1w>93.~' );
define( 'LOGGED_IN_KEY',     'xjh)fE7T%<bD3as-|KVP7uYqq+>gt$Y}&3;EjX&7ZGA?QETNQw-f+_`+0dErBN-F' );
define( 'NONCE_KEY',         '3#u@c-r%f&r^h |>b;r@S5&%ZST8X67tw SBbtiTX*^So&Z1e,t&Ml@HtREY/ $G' );
define( 'AUTH_SALT',         'yDAuPGq0QQ EtqOTntJjmv4lJYSDV9AUx&D/c@:RfNr]]g;f#`owuoTm`$j|(y{`' );
define( 'SECURE_AUTH_SALT',  '1~e=]8%pkLx36}d/.j:EXFv$=_7bPS~(Uwn<x}%4Jwx6U-YRWRJ2@Ow>NlFD :mq' );
define( 'LOGGED_IN_SALT',    'Pjl^V[2YW}cRb5XC/4#=Hv6tB^NSa/b^d79&5~2Y/U*z]V):3 Fn|i==p<DU3Olh' );
define( 'NONCE_SALT',        '!J3_Ynmm$3pNiJZX8hgf#Q45KjSKjBph-I!v>J[Ay<;&1fa#6?(rfLQfQwy+r.V9' );
define( 'WP_CACHE_KEY_SALT', 's{C8;C*m%?eog,kQyveg)j]PN-#1Cofnb}|uhJ#=L,7?RUE`S&kp`YYXorql,ZIV' );


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
