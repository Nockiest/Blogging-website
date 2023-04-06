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
define( 'DB_NAME', 'MyWebsite' );

/** Database username */
define( 'DB_USER', 'Andrew' );

/** Database password */
define( 'DB_PASSWORD', 'q)w1iJ-0_nh.7B6H' );

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
define( 'AUTH_KEY',         ')W(qpyVNMbAz*p>grBX5]kAh_Xfu)Tcbw@tfs.<A6[R^ _=UE1cYG!6Ur{&_h|VU' );
define( 'SECURE_AUTH_KEY',  'HUXD#YEy!y]dJ<$h$WUwYDwdMFE-j(%C^U(VzZ?6*h*bUoDh/i{LY-k2_6fg=?oX' );
define( 'LOGGED_IN_KEY',    'V)EdZ AR_7bj(6{JmyHi%&Jqeli=e+o;N}Q4#:imSXAAAaD3mc^i(Gj3zvHg[#FG' );
define( 'NONCE_KEY',        'uV*w*XX}{nU2PX}$#2C=?Y/)A;qS2z==0cOHDWG8Zc1VI^OhAOA*]sD1OTq,?H|T' );
define( 'AUTH_SALT',        'jO]&!M2k;#qICG{2!:z;EsEu-A{`$j#&w2+]Dt3/w5x[06br]nm69Xo3HlDx8yA0' );
define( 'SECURE_AUTH_SALT', '/<2`*qf=zp0sRC 3[UtW^(1p8K Py?ulHkXez4kDRfp<[|WLgDW}kMY^49GD[8WL' );
define( 'LOGGED_IN_SALT',   'K66ZC>}@#n0-DsD,nZXffB4i3#2!p(Q@3_E0v u.%p&%>h &lRS[.#zv#PNVZVG|' );
define( 'NONCE_SALT',       'VYT[R,zT>ZX22yX1L1s2O`i90rs.~6zg?[o-5xfu?!L1NM]LRYplya$>;>HG-RcK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'an_';

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
