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
define( 'DB_NAME', 'test_project' );

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
define( 'AUTH_KEY',         'yfq~;Ct}FC>[6NqIV(eJcx&:<!G5@D|@.@!62CZu?BHfOdkw:)4opW%!M::9Kgsi' );
define( 'SECURE_AUTH_KEY',  '~(w-+PJ#oZPb_.<^kRM/Dft*nRV0i:2L89RJjI-9eZIul=$O;^a6j*U:OsV/7BF^' );
define( 'LOGGED_IN_KEY',    'o-hpn>),tb]^W`j/$A/-M}mB8g@y_-S<I82`!o6iXwW~hTKM.En@1IPXX+c5Z:>T' );
define( 'NONCE_KEY',        'UZN!d]Uwu+q4d]IN*Vc&N+T)Bc/@;>jGcR399S%*%RXkR(-uj4MOUz}FcJS=52UG' );
define( 'AUTH_SALT',        ']#6=I KE}ey1l7UP9;)Lx&3<Kv$Z_%CoC~bT/EWm7^D@E?a|b5!VTXwx:_~->)bc' );
define( 'SECURE_AUTH_SALT', ',0.?&,tF~o:4Pvd~J?VD(ZFLB5,[|We^MRs8N=6Yo.j[;=sLVJ{T z_=o[9uV)Uc' );
define( 'LOGGED_IN_SALT',   'n-~[t++W0AjW~^3wFq6;[BkQaznd/!X&tEa#%ZTuq2PZ`dk2_6Txe+4*(PNBaztb' );
define( 'NONCE_SALT',       '<;q#46`m_f?k$G^v-%pY`%-dYR(Rov32BWkcAc-E1-*=!!|QFs}8[_W]V:5M}j C' );

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
