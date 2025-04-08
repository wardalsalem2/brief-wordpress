<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief_wordpress' );

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
define( 'AUTH_KEY',         '!#`,^i~mdmV*IF*tBfkq0^6U|D11EA~?b%MxLB3nAY[K($qD4*I$O8vj,r^pds=u' );
define( 'SECURE_AUTH_KEY',  '.es9(zX1q0Z0b@1BHC~e(u_5UH7>AM3.y|CJv3vS-X-DRI]vI,ior{NdxtP7.dIB' );
define( 'LOGGED_IN_KEY',    '77uE5$*1Lty0H><S2SKTw%@B7.9sJrw%8nOGQBPJ+uVkI$Q;Bgf{/@~(wuxk;f )' );
define( 'NONCE_KEY',        'kl@Vo4]G9qIUJp[xq}d0ULs_Rm=SCNe{K|Is}hP-YLp!-5mez~zCzm&4/J2D&ILY' );
define( 'AUTH_SALT',        '[Z3q($;mHeAMkCD9@$ *hsZbm1?xpP!>A.msNMVJiMaPv+-]JwK[lS@ulT(=q#<4' );
define( 'SECURE_AUTH_SALT', 'S`k]hE11s0*l@c-l+_,I8ke)ya[.+KZ[F*n%H~3g9Xl=GDiDq>+}z~z#6&><? :`' );
define( 'LOGGED_IN_SALT',   'ylJ7T%7c&Z/NA!fUY2c|v<FRh;Ynw1+NQai$vd3 ea4+kVqYCV3*MVPoYtoxJ>Ct' );
define( 'NONCE_SALT',       'W&jZga&%4b|_zh):<K3/MKW+)|K7H16;d)pdDIJgO<|URnbzXV?xA.I` s)a/35g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
