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
define( 'DB_NAME', 'curso-toronto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'N#icA+$94@uJztDB7p=`4J8Yaxb Y:iQ,@0`){$*3c)U)p P*wR^EV`&pR;IJ?Qy' );
define( 'SECURE_AUTH_KEY',  '$R=+2bXDQtT!vDRDbF=iO}}xz<Rl?VDSwfClpWFZCRKB)4V-y25g]SN&CMAfWBv.' );
define( 'LOGGED_IN_KEY',    ']FI*5@CiLvLW!nmdP1Lh:ZBiiP{CZy5izlCNno7ZDuH.q|h0E~M32{QZ{a11!$]Z' );
define( 'NONCE_KEY',        'm%0doj*Za4]o>wp1~fb!Rf5*6Am2t8YDT)WJI(1@kVgfy*MN4!g/qrB;l+q]e;w_' );
define( 'AUTH_SALT',        'GxEZ3Yo4PNC1Ir>s*]B:A;g@(9x[)m,94.n=v|eMD~xcqPFJfNrKt{P%iWq+P?T~' );
define( 'SECURE_AUTH_SALT', '*u9_~e0GoN,sGeKc7P=7-{Ed_o~qc%<GqCq6{@D_fo8-43DDQ4-WEW6Ut--HI~f@' );
define( 'LOGGED_IN_SALT',   '~QqB}&8ht(wgm%}okOaT@Ip5j4ir{}qU!MzSlin=&tZ59)>jF+4Q;SHGYWk@l5g`' );
define( 'NONCE_SALT',       '=By.#ej$/A>qCiIgp_GP9FL1dL(i1_`9Zb7HN;F+3 &xv&Qo2Yx2t>[nUgA;&&I%' );

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
