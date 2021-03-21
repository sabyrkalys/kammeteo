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
define( 'DB_NAME', 'kammeteo' );

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
define( 'AUTH_KEY',         '+aRQPJB<pYx%T1#9IGY*Q>h_L^lB[=,)Su?,fOWlEV48pfzJ+;xkU`|l[JVNm$8S' );
define( 'SECURE_AUTH_KEY',  'V>h~$V3.RX00,C!nVNh~>M0m>R!A3%4%d.hB19oR*Ku?B(gO+)Qcd*f}dja6 lhm' );
define( 'LOGGED_IN_KEY',    'ZOCZur2u.LMG,-t>}O5q8JH,9u{<6boDX=-iMMijIe>Wg@_B`u) r5]Y!L*mVHc ' );
define( 'NONCE_KEY',        '7?DeTH(q)96cqgHiir3UK<EBii$vbJrL/Cs*%`o3E:s!^Rv8>Fz{C[$01o1&UWSd' );
define( 'AUTH_SALT',        '0 lgfr;xn;vJxeXM&wiA!96mRWVa7*}cFQAUU_@V5^;+ocssWkYgWD?d4(m>e7~s' );
define( 'SECURE_AUTH_SALT', '+OcvpU`_=tkzO2uCCWki]l)q+p4C>UMfh<u;,wc13Dl?.RC`-1z<Y=IHo13lpdUZ' );
define( 'LOGGED_IN_SALT',   'ZH9kB`d].OYXzYa-tB-V7t-cj[Sx#|I?X${5-#e2b)aUv+7E)KMOfZr _- ,p#z&' );
define( 'NONCE_SALT',       'iA5<}H?$>]I=(0o%Wx%mC7Q1--zKX  L[MN2|Tyg)1ttku8]KeOZ^}m!-F$TKI]K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kmt_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
