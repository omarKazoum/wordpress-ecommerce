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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f-K,bRR#pud@)=b 0I>wI<q>%CG|60gx56Q3fktOa89TQGZIPtA8jHkgnm6;!teK' );
define( 'SECURE_AUTH_KEY',  'Z3NCubv{aRuX!m$tbP^LWnjOk#x0MeO`1zTODU^Ql5.vcyZ<P%Fq|sD)i13(gmw4' );
define( 'LOGGED_IN_KEY',    '5(Ay~QK0/[_$?yn:d| 5a~k,q3zR{3FvOid `i6Jsdzcz7%Tt`Gb}]!5I6fwXmMo' );
define( 'NONCE_KEY',        'e#b^Ovk $<CaxO8lpPJ!?mZydtzzaz2$*4-%fVz$K}:9?9RPseFeSj0}VU=Al{Gw' );
define( 'AUTH_SALT',        '4TaM*q9yT!Gk~y3?L*o=}o6#Z&Vq3&BDcR[Vx+Fs7B:b02xMWs8J?oG!wsAO%h`b' );
define( 'SECURE_AUTH_SALT', 'P)c(%tTzfmb!{;]10=T]d 8(Wrnj^c rLEdPW1Lo=bXwGr`(_1O#qKl3aTPJ4S3>' );
define( 'LOGGED_IN_SALT',   '6lD9qDLR|*P`O>PH|8#<PIwl[*RC[LS_|FWk*qcp02Gaa` ,5^H8_ytZVU[{I!KD' );
define( 'NONCE_SALT',       'N}h}Lp_Ftly~H)xK?(py>Fu^1R^{eysy/Z8ouiBL5I3OT/O/0tv:do1_E+?PGvRI' );

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
