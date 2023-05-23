<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

define('WP_CACHE', true); // Added by WP Rocket
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
define( 'DB_NAME', 'iexeedu_produccion_iexe' );

/** MySQL database username */
define( 'DB_USER', 'iexeedu_produccion_iexe' );

/** MySQL database password */
define( 'DB_PASSWORD', '8bb7eab5ccab1ae084eed82e58035c20dbda63d78d95f609' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '4v{7}X1z#.<nKGCB/lTvme2h^-+!THw(|JZvjk)E`xr#)<Cd< -g{2Rg2xkNWVMx' );
define( 'SECURE_AUTH_KEY',  'p:Xa5UJ5%xkg9FTx7j&oZ0dKBChvyR( GN02jAPIe~qje,K.{D*ZF^m{9X#f/9R4' );
define( 'LOGGED_IN_KEY',    '7$_O?SwvwvyU0yq|/(Oo[Kn:8 FFh3;)*%`{y/[$QOp6Y4!)_Vc&W1G_jU:Ju@V9' );
define( 'NONCE_KEY',        'W8*SZRc[szZ28./D},-Co(4j};LK mroC|yBTWv}$@bFrhKzl-Oj^M$OdrM<@@Ib' );
define( 'AUTH_SALT',        'Eltjz`7jDs&n3x#KA`u-0u,>=t>dw4OU OTz1QTAjb;cd&#czPnb$+](PIoj_ yo' );
define( 'SECURE_AUTH_SALT', '.wN`qUxGL.fbfPh-#emfoKls.=/_pR|+P9Ak2U=Nqfm,2G2y$n]zv(:=7pQ}2K[9' );
define( 'LOGGED_IN_SALT',   'mADk4/Xa@p}bm%Py>|E `u|>#vMJbb;p)-Fetz--_XF7tC*DlX,6& <_:B5?iQA ' );
define( 'NONCE_SALT',       '#r;NYn0~[#e&csDkBJcU?7P4>&MNdBF`njp^#W`@{_kv}f}*7*U#ke>B_RcYo]!&' );

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
