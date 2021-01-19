<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'ablsan_homo' );

/** MySQL database username */
define( 'DB_USER', 'ablsan_homo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mkt@2909' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '128M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';ZRm):@9b=Z^}kp3B,_Vn L-fk;|OZtMq#JJ(]o H<_zge:0:WQ|z,q&zJ/QA6O?' );
define( 'SECURE_AUTH_KEY',  'r2} V]0tTO^jf!e+ju8em+[[XdB%o3]@Y1qK)#DpX)8_>f=WmfU$QZO)>mAGNCHa' );
define( 'LOGGED_IN_KEY',    '()L!/?]U)acSo[/,R/`9ZDujXddHZK&Ls4jzsZ,;j *^*Rs!w~|k!e/]~V0j0w+0' );
define( 'NONCE_KEY',        'VE6CD8d@NjRjK4W ,hA 3Ok#3&4*;aL|RQ/>0rXwjTVYNEORZYQc73bOp^+=1.40' );
define( 'AUTH_SALT',        'vRalg-62M},%O)$nrf`p1uce6G6b9KNWR7Z%5*r$Lmbe#NW)`3aBN!@xhCgEJX>%' );
define( 'SECURE_AUTH_SALT', 'YR#S5j.cdH7<+Y+gBZC%2%fC)0Z,WPHDbXvi}p/qY1fQOL?X;#&f!--H,1Anz$9^' );
define( 'LOGGED_IN_SALT',   's5x0JEN^dw+^@kE@>AxeDLGg0-ec(hrH2Qba-O%r4t4k^Ldv%X(aMT$@m0=?LB~b' );
define( 'NONCE_SALT',       '<61`Ow5hJ[W#ZbY,&Qbdae< 2qk()A<GueB(?FeI{Y3LiZC>MwLlBwnx]D1JXnvs' );

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
