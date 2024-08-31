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
define( 'DB_NAME', 'odiseea' );

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
define( 'AUTH_KEY',         'fi$:$w3.&5C|Lf@3pua:(o .%+<p|euN(#,]7x9Zlyug;Ctat`NFb6kv>DiGy/GS' );
define( 'SECURE_AUTH_KEY',  'k:SI2HKn}#BTd;T65I=/Q8ghWft2fMSA5d^{}nq,o6v3]HexSV~O^]d;t%6TKK{6' );
define( 'LOGGED_IN_KEY',    '8*PZxwEr-|,Gx/cQm,gVQVEG>5#CHMn%DF{feeUAd:03Bc3*M+>I7*)_N$L-JobZ' );
define( 'NONCE_KEY',        '3~1x0f#{AFkzDM5$${VI!LnUFPVAZLb*~WbRj<q0ul2ACgr6+*>=-*(d(&k#{j%6' );
define( 'AUTH_SALT',        'IE|Z^c/M{j%#Dg34s:$pt6n5vu.EX3YUD?Ug7Lne-=F:)%A=Ee)[L}#bm&d :sR^' );
define( 'SECURE_AUTH_SALT', '7MWH]eqNDjJ+A&J@tLNWN&%o&mOMF5-=bQ]}ky&sfw@>S|HC?[O1h.asS>Ify(f~' );
define( 'LOGGED_IN_SALT',   '?CM_y$|W|GBb){B TLSupzR[4dKDA@`;UDs-uD_{To/itM.JH&e3+F%2%@WDpJLj' );
define( 'NONCE_SALT',       '`?A=97_t{+s, 6.tt3z5y`dCjc#Fv}6?Dz>&P^U<yz)0i&K8ZQwA;mzN1@*tFTNM' );

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
