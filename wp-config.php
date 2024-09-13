<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apresenta01' );

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
define( 'AUTH_KEY',         '2h2TEgTeF?YwIIY>o,1yCB5|yiT{,$[/e-`B%Q~Rbo?0J:X$Qeppc~vhnbh|u{8F' );
define( 'SECURE_AUTH_KEY',  '<u%15:E.Hpt4o`$B1X 1x;h;cUO^.(bn>+Z!7kV>z:/_Z+e1blEB;a6,A&1A/k[X' );
define( 'LOGGED_IN_KEY',    'FIc>j mJ=Q)}Z(>(Wy-_j1tlADqLWk3K$ IY=#-N7->H}*7Ik[^8[Jvi__v5/1=A' );
define( 'NONCE_KEY',        'T%V4:|aOEd|](t)*S0B]J!L3LsCj$nwUnO[c35NH`>A`i3pWlJxHEx=h7q]KM*_X' );
define( 'AUTH_SALT',        '-~,IW?{Ol1gq!+sgsHB&7,@m(7dHQ*ZR[%vS DOQ|dI#/$I-S8Duv69=mZwu>idy' );
define( 'SECURE_AUTH_SALT', '+FtfMSHx]#754E_5]dj>;j*$`#fwj0h{Q<Z3KAagt2E;s}|IuIA|&>l/Z2 Q^W%l' );
define( 'LOGGED_IN_SALT',   'PY,Su[~[O:{ao,rYXU&D:C1L]b= f5lzD/qZ24(^zg>2s$&.r8o.;G@=Ilxj4;c*' );
define( 'NONCE_SALT',       '>eWmmF53sSLZBkzc%0N0Css|%qos-K$fFMV{F:JtCl}tNgPBK/t#{!:mwN!d{/2o' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
