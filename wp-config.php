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
define( 'DB_NAME', 'hackamt' );

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
define( 'AUTH_KEY',         'zH-v?&sZ&Jo*4~z)IxzVGbxC7[HwJuK4Gv+JY*FNVwP.w8</xw)Q:`I>oxr::k4Y' );
define( 'SECURE_AUTH_KEY',  'C/j5<,XoiKv6P%t=Mk6@oBwlySBS>m4Q}T!xnS}lIT1.Qi##xFM[NGN)]K#EQ4|C' );
define( 'LOGGED_IN_KEY',    'uw.tZMB8eQn3,0y4l|N8rFM4cG&MFU[$48[dCgM`BI`]!td%/^GsX|YK~|g&jn#K' );
define( 'NONCE_KEY',        ' rq.l@%jnJq$6g9~:nbc|Lb)1UK9X;p]3=AkieDa0cp=/sET$e:M-vH4xK&awRt3' );
define( 'AUTH_SALT',        '0/Y mEj/[>(ORQmahzHAh*-oFKE4N#^$,rDo?-02`*(qr~&j9+c-(ST{uE*n>mwh' );
define( 'SECURE_AUTH_SALT', 'pB6e}VtDI~Pg?[;sf3~}cVDp-`|d99ov9=eD>{uO4c+6u )O941Xsb=*O7/8`)%e' );
define( 'LOGGED_IN_SALT',   'c9!lV^<Q%Yn!<5m@M}Q4)o<1EiWRE:`9z0Frna6`VJ~RS:yV69P8kP!Tc@[Lmpj(' );
define( 'NONCE_SALT',       'Vl WL?Xvd9DOl}d^)Gwk,YG-^p}I~{>>ls{fZA3;x$^B#!v|ujGAL68/;@P=XK%z' );

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
