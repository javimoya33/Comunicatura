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
define( 'DB_NAME', 'xngaafotjccomu' );

/** MySQL database username */
define( 'DB_USER', 'xngaafotjccomu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Comunicatura9298' );

/** MySQL hostname */
define( 'DB_HOST', 'xngaafotjccomu.mysql.db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://www.comunicatura.com');
define('WP_SITEURL','https://www.comunicatura.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@~XtVj4f>|0Fvkb)jS X8FSnkN2+-1(Z;c(W@~KeCVvBAg&)pO[LWC0aq1Oew32t' );
define( 'SECURE_AUTH_KEY',  'G)~/pzfIyMzj)%*X:x2 mZ2f0f:3H.n{Q-E.(XENQ|k1@e/VZB0[Dk/&hb,b0H$G' );
define( 'LOGGED_IN_KEY',    '3jXyDfGO20zyeHKt+T%p!bbk7VjXX_*9nc8?PF/Syu]N-;+/`*L;rqSNUrpVjpju' );
define( 'NONCE_KEY',        'YQ#eK,ll{DRCY)5^U7!&gsxv04eP]&&}<{(I,rK(oE&CwTo^]jIG6Kgq9p+87Ol`' );
define( 'AUTH_SALT',        'kA[,-C6]3F;[oz{K=:>r3T[Y&|$__R|a*l|Vs[v(xHu$optr.$ 7X4u<;VsQ:6Dq' );
define( 'SECURE_AUTH_SALT', '#_z_<A@jUJ1[sJtKV_+4+0q9i:aX3v[15no[I,pw>uK#v:AvirOZG8+L>yvj#&qi' );
define( 'LOGGED_IN_SALT',   '4o z&zt@-je^MDi/%o%;3>ELf5MWC%GOyR&4y(`e&mI;9JO1{-I5t+JMq`Y-f99k' );
define( 'NONCE_SALT',       '<4}Q@Vvo@fA3Luc/N;Hv%)N pjHGE /AJ+J}E{QT-~2&.T1~.65n<}nwrO~gQNzh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cm_';

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
define( 'WP_MEMORY_LIMIT', '256M' );
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
