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
define( 'DB_NAME', 'bancoteste' );

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
define( 'AUTH_KEY',         '/F`v<]^KH#wv(=yvn@Tw9VA/0wd-cT`+RCb&ItcbrEl}$:HBM)W90j oBB3g}@ej' );
define( 'SECURE_AUTH_KEY',  'yHys%I&hAG<+.;$wGw@CYD2/Qcf@%~Y0U[8kP~WA^?7^89N.|4^n<4a/tB[%Uiw2' );
define( 'LOGGED_IN_KEY',    'Fyl@9;)lYP}^=Of&jEjQtt7#n@(B&-[wX2>MN3,EOa]JYuO+Rm J-d^<rm`E<u9u' );
define( 'NONCE_KEY',        'o0K-`2$@3g!JR@s+lr.I_L}*?/TXq<P,*t@AXO4^PCzZ]F>>ICH5kO[]fH)n2Wj5' );
define( 'AUTH_SALT',        '8f4E]*_q0malf/if.>*Bv<ZLkue2ii|Tx#Ea}/88yr<4jma&[Q7R6-[>li}+cc_Y' );
define( 'SECURE_AUTH_SALT', '%>7H;&&4>}^>U3WG}YbTZ]KoBs!4W7UQH]r(YW}z6W;nHiH<n<u=Zq*]p,GCwl.j' );
define( 'LOGGED_IN_SALT',   '?lxlhRi$1F7.}}JN4M>ND^i,wDk@KfucmDQx$X0Z+e12YiYN&[LCzfXy/.BDy2G0' );
define( 'NONCE_SALT',       'mD;bDoUw76cPsjYW5,OJ![OrEYIuFhL)N7&A=>b!o~ k!_9wT3d~Z[>O4Wi)FTDk' );

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
