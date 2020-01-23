<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'happy_tooth' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!=>zIkO,k2~BMj>/<C%Ru!FYZ*~navQt~x3DTviuJv6G~}*/cD:W;CV6|7r|R(D*' );
define( 'SECURE_AUTH_KEY',  'G=kFF1j*LB`D7|l}@D1 p:A>(h?Y?5RV-(Zd_G)Y8iKw_o~ oJ&!]4/ )H=wmr8w' );
define( 'LOGGED_IN_KEY',    '~ovW.P{vnqnc%F7I!GP~teD9XPA1L0}ch*6Vf9Lw-(!~x!Dmgvv_33K&2~83(j$R' );
define( 'NONCE_KEY',        '%kV/LSJovQH_O%^w`f%zV(J ZAx{*f/t)v3GpN2gF>Ppq1Mnhu*(vI,#Yz_fy8^4' );
define( 'AUTH_SALT',        '&9)PlUy?y_gft>!hS{|N7q(L!kspawqP]Nb1*|oSH2oR8mi9!GW76_Ix6d+&5jUw' );
define( 'SECURE_AUTH_SALT', 'czi^B9!>~=~-:q4h^a[--3j*tmoG[.o$XC!DM`9Lo$n*D1sIt>:</G90*v;L(/R^' );
define( 'LOGGED_IN_SALT',   '}-JobZ4mZ^i2wCi+S2bA6{On4$6Cn&qc6T}9S5[qU)o/.ek_}un!|{h1H_?)+9,y' );
define( 'NONCE_SALT',       '3gIb]m(Mg7?I7ff46[qryxDzhW5vrU7h*gWj=$!9OStV@8>ohbk_}<G{#VA+^PJs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
