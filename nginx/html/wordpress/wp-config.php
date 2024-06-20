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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1{:<ryXbtNaF24RJL0.Nlt^[Nl7;?KWIV:g44>fwy?/eH/!3r?ac]EF^4-D}bDj0' );
define( 'SECURE_AUTH_KEY',  '&}6s>l~U8v-p]vPp 3tA,ki-q53<}V/~iEcVuC1_w%r}[IsIHb>;C1&gxo71{]*H' );
define( 'LOGGED_IN_KEY',    'd4;#mRrUYhveSMdT72_b?4f9_!/K=!]rdJUiN&;9:sA=.{5C9N*VQe.Qs+Xu]62x' );
define( 'NONCE_KEY',        'WHc_1Uypb12}R^wb6)iBye}kWDbetY7b>o1*:`=j8Pld{$h./c~H()H;?pV.@kBH' );
define( 'AUTH_SALT',        'P#mU%CK6i4];*q_Hg>D;3+B4>WlV^X[L53j_$?-@~l6xFbGK^mZP^2upao=p/A5Q' );
define( 'SECURE_AUTH_SALT', 'Rh^|8(pe`>Q>t*B&IHn~7ElKBEZ#Y%TwE@ofdWpzMGX}MdLmin.>T8d3?[f~*M:T' );
define( 'LOGGED_IN_SALT',   'N[LQJ24E,aq6bgWI^y0r=fyd=)&ZMY9knd:b+7_.V_i1|6kGDl|2oDO39w-zUXQ#' );
define( 'NONCE_SALT',       '=#4k<|9xGst544.mE~0GmJK_nD`]x%QXS]RQz@edG-Io]&hf&#v,d^EvH2|:Lq#s' );

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
