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
define( 'DB_NAME', "piwan" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'K=0{zEapk@#hk*]*T7XiwvP@$KGp<{CD]C4>%*~~E~Z|S6H+H=t-c-ZnJ2znp-^6' );
define( 'SECURE_AUTH_KEY',  ')Y1@yh-J[y_E7I:ioVR4AD5FZGZS.LQ*DRtN~cmq^{v`i9cqs+4 [lVn)b`H@vTf' );
define( 'LOGGED_IN_KEY',    'Z~*Z!,TTux<n(}o=As9JY-k~Ih:#C$A?/F}_^~^Nwq=ZLQ-]:cZ{RmqM:gJPRD T' );
define( 'NONCE_KEY',        'XU1*6g%hYH~ikM-x16n!uxwUt<; #iIG3;l@Je:@PTZM2W/6(;[m=ga|+j~IjQ<@' );
define( 'AUTH_SALT',        'IGIcW=Nq=+M<oi0,-MY;0}1n;LsMxJpB[#MA]%Sar>uqhe7#)-##^vXl50uRrbFC' );
define( 'SECURE_AUTH_SALT', 'in&,$dYAcur1FO}wxy!Dp};kiyF6D+]@|e#R%}lqW7*K5pO^rthFi:(nJfMM]-dc' );
define( 'LOGGED_IN_SALT',   'vtB77|M(`1+=>*F,9dBI<?kj$cMf)F|CqKi-[#8$,{A9-bh3@1>-?oisQhd@OJ;l' );
define( 'NONCE_SALT',       ']66o=_eL_0++dwC3Y$m0I5&BNp,eaAhA]@LCeAb0$?a)63(kqztwTshs#3s~N6lH' );

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



define( 'DUPLICATOR_AUTH_KEY', 'lLggE#+;MWN4Xadlra2iU4&.gLfLBITP4b*MI=Jy$^bBZLGxQ|tLA;p?f/`N2Uqc' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
