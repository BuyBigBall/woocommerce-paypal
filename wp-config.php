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
define( 'DB_NAME', 'wp_paypal' );

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
define( 'AUTH_KEY',         '(/{7J 3cX=#%Uc(OBr]_EgFh;kJ@zsT@N25fqtxFWR1`n)b4#KHujZ3,4)Ids*Th' );
define( 'SECURE_AUTH_KEY',  'rYZ|~c7|B{~=Gj;Ip}JHq:L[Y9-]z,VtN_^Aw:8>O0M.;SkLdE/Vd*Y:Lq4i6ulO' );
define( 'LOGGED_IN_KEY',    '[Py,^5i4;6)a|TDiz-G<jOAR q}w@.u&G 9QpkIQp5NMjTbi@NOQ.=A~;_U)P>-H' );
define( 'NONCE_KEY',        '%{=x9,sJ?iRo]-Kat2C&Fa&i~L${v[5rQJ(3w-$Z@T&C/zM!%!AfzVhqH)q}BCjk' );
define( 'AUTH_SALT',        'aGj8NIjF^owame5 Ga~fKzF#jB$mt;rW:2FZ}vrD|fS`j(IS@cBL#sK:D>B~Km#G' );
define( 'SECURE_AUTH_SALT', '~,aoGGw$4^Rb/-O.JD5%=eUd[~A)7No^PunrJc*/oQ[3@TOQIQQOQRQf9YU+A;Iy' );
define( 'LOGGED_IN_SALT',   '9:@}dLE`:dKTPp3w2B?0FU{&%l^PYWYqYUB?Md1j.,`}R !ojJ#g}IlA/t`lT7Gl' );
define( 'NONCE_SALT',       'A8g{%#ZQ)=K!M9^A6KNW`z|BEB,~AiwKk<GQ7^>-{zmv$xZ}f*~(bC(.&=I}-Gu0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppp_';

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
