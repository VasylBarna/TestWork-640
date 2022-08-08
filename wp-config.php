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
define( 'DB_NAME', 'v109929_fornex' );

/** Database username */
define( 'DB_USER', 'v109929_fornex_u' );

/** Database password */
define( 'DB_PASSWORD', '$Wu^9?E:9*Zb!*xi' );

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
define('AUTH_KEY',         'Qz5WN)RU-HY|TsJm^G8@yeiods*AyF3jm|-/+yo^lx+i+(/aMr[({++8JPG0L|4N');
	define('SECURE_AUTH_KEY',  '}Jvp-: &]ro!@X+]~9R3Og?79-/.H-Fn+?|bwySFYEinF<t~PYPjM6Z?dE9QpeV#');
	define('LOGGED_IN_KEY',    '_;XCSeb*,gFZtwR|_$Eg?*,S/&8J15|}(.Dja~UNW/es)NQVwWun&n-+M~NFib<t');
	define('NONCE_KEY',        '9xkp{l*xKN8a]ef|v]UBCoCNWbjI{SJ0E4 }BA.=!5I.{J6pMn#nqYT2fV-V)JBr');
	define('AUTH_SALT',        '@X25iWaE0XHvb$;iH4_e]&/fM+RACB02p}-!VJOBl*Z`b2N)Ap:=P.Xg~Gg^{ ]#');
	define('SECURE_AUTH_SALT', 'Qvnt9:N12*=Vyj^W5#2f*uK-l%_/w^[$$sVqM&f_dA)D|+B(Kov|P1O/#YP?QT2b');
	define('LOGGED_IN_SALT',   'vn ~Gi<#Q@DGS8GX o}q+T|#J{o{54.1BqhCU+sK0)]9PV])2Zs%5eqH,9c)eu0j');
	define('NONCE_SALT',       ',f3KH8iFbV@+d1uWd4&,Q+H(PNPv)CuBs0B>yI],0%Id|YadNL@E*W4no^$/ssg.');

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
