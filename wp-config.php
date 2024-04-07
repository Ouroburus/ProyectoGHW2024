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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tiendaproyecto_ghw' );

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
define( 'AUTH_KEY',         'Lua4w>R-sBmu0uHUB)2I_FmaEq`8tB4k%L6+,uE)k&+~Kk5DOb}a{] Ez~jP`7fD' );
define( 'SECURE_AUTH_KEY',  'XQq@REbkqdcjK jMFiU8rpBJNkjx=nXr*S&f4%u[gX-kB. ~to@*P:*~^GZzdk);' );
define( 'LOGGED_IN_KEY',    '#;_w/4Wc4mC8=w*;bh[d~x*_?`{!Y;)//a#;[%1[sDTT8K<PNB{u.#F&Y,d?T>eb' );
define( 'NONCE_KEY',        '{L;>LhB,f;qu$>:kz*;X_H`y;)eFq@*o<W*Bfp{Xp~F%Yy^(5y?L.YHi)RIzwQWY' );
define( 'AUTH_SALT',        '=`o7Yg>7;eCvX9r({|$@tTc16@iv7wElG+Hb0hq$T2DQHvrOnY6d~:D.tlxw#W%U' );
define( 'SECURE_AUTH_SALT', 'R%8FNO4JdpA~_hNQNHC39Hl5-:OHi6dJ2,vIT;0e4w&)s7:i!8vbTJ9rtm!Xd{vo' );
define( 'LOGGED_IN_SALT',   'f}GAOoi6Hl9azRNv=,kSc~FX#N~$Od63c-9p:?btx%K>b.S.]GafRzeG?]:S~K &' );
define( 'NONCE_SALT',       '!74NAnDKHCpeA2+Sd9`bz:@@vkC(WLI7.Oy>_.I+NJnY}ai1D}2UF8<j9xs93tGS' );

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
