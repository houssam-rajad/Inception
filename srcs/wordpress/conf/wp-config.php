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
define( 'DB_NAME', '${MYSQL_DATABASE}' );

/** MySQL database username */
define( 'DB_USER', '${MYSQL_USER}' );

/** MySQL database password */
define( 'DB_PASSWORD', '${MYSQL_PASSWORD}' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define('AUTH_KEY',         'M=B&>1Rq/fjYrKKoNsByn|@6)Elez=aAp,ZI> ?Hbb1:mUY/^ovd7Br_;URDR|-+');
define('SECURE_AUTH_KEY',  'J_-]D+I6Y33iYj@jN%O$v|R<<|+8^oiMa.blY@<G{;8M2,?n< pBjfj$%pu$.v:K');
define('LOGGED_IN_KEY',    '.||Tpr8=[QqQ&ok/Vv9xLEU`.-jM6a~LAHK@6,acXZ&YT$l_Fl7^t s!ge,^+QCJ');
define('NONCE_KEY',        '-f9$2^iU6x-XL,+X1d;qL db{#AgGP77k|0v%[jpkn+k.G.2|-IN),W$Oq+pugr<');
define('AUTH_SALT',        '|9gh<vG)QIY$h-2Jkdb]5dws//Re$w@Bb(Qu) re?Ttr*4ln |J(rEh;o$z_[TMd');
define('SECURE_AUTH_SALT', '+kK6mlLxjqyS/x$v|1;bgr-C^PObksumQ||fO<wE{Y|JkFnAifbR|9tTEg+A-6sk');
define('LOGGED_IN_SALT',   '<BiJ^1QBbNF-g*%JgivU%UJ/fTSonhQx::;B[H62#-lGf5XR?=.WD; :qsI@I7@e');
define('NONCE_SALT',       'Zh:n(BHxu@_WDo!dikKc(bUu9fTozb+a<$(tD4n[gxjTRCn7%M:W@Ji$IMLdSA:');

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
