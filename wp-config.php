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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pa_sol_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<6Rx3Kke[xK|pFV;G:mL 6n!Lv~,5SpW!i07U>Xs)$?WvD>6fU-ms8VduUT:67n%' );
define( 'SECURE_AUTH_KEY',  '=`9_QQUU<4?._atwh?;9@/l>$Jy>6ci%tVN&WS=_D;onk`LboE1<ObQTR(sGZzEb' );
define( 'LOGGED_IN_KEY',    '!(IcqsN5<fn/]bCZ*L }r^#}HD{9XZ,S.`A:0%1PEQc%qZ18`EgW.m8QXLuz;-<z' );
define( 'NONCE_KEY',        'k3T.^)IMBLBAq4CUA_TmanJ*Z/b-NY*.zT9FJ#w3#*bQM(JDAhm1]V#<wM*JUs(!' );
define( 'AUTH_SALT',        'O|]SK73XH8y9P>mv!*uK{*U10],m>0[%!kf2vl@OB 2$n ByCSuPZ]EqR.x$Ye:!' );
define( 'SECURE_AUTH_SALT', 'f=yqY_bW`ALVqVxsFnld1FwhD?4?PcGgxc3 ;RMZOZ_M{tT=^0U<eFH6[a=k&R/D' );
define( 'LOGGED_IN_SALT',   'Frebb-%b[YPjE4k>)2nvZ)u4G>gtv<Dbg4E{q(/wf;3%2?bT-W4kDx}qt4Q0%%,R' );
define( 'NONCE_SALT',       '5cOcreyqw44pgE93#{x8G U]yDr5x1|Z8])i#VRa3c`*]HYB}|fu,zIRf`|?O0.f' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
