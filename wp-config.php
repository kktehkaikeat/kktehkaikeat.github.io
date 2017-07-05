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
define('DB_NAME', 'mydemob');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M9^# I&C8}T/FwnKyqV>}:;m7MoEJXTQL[%ASn@U^<vy`r@{S,9GP-WcT6m;DR+h');
define('SECURE_AUTH_KEY',  '$Po&@Z=!|+qU?lW-ml)JpA%=YOeYr/=t!=LS<n)c4u-s_.xdAM0T{xDW<!$sef%o');
define('LOGGED_IN_KEY',    'LO}DmNJUt18QjA80A7g>2 Itr$x3YvH?PxqX+1-+HwvsbwW(],)Z6.J=25?kz`Yt');
define('NONCE_KEY',        'H?BAC;y,O;_vpmX!rZT-;ICU(Ll,}hpgxiA#]lQ]*X0<$!zrmop>qU:[{o$//z-H');
define('AUTH_SALT',        '>YmFj*{Xb2+6/v6y:yF~bH&wKCB@*=u =N>]ls0UXT]/_[K~h)j3WI!Nw*^9KGH6');
define('SECURE_AUTH_SALT', '&LvTuW:$}dvWU~YYyDRPBtOj8<@SD2UV8rR~F8)/(qS;)`3$6{0u[dIflf8w?HE)');
define('LOGGED_IN_SALT',   ')~)J}Ji]FNtitDA^S3Gb<ctQ)q&e|FAa%G2QuM@`]z4c<Pf/zcmgsph+ShGaT8)g');
define('NONCE_SALT',       '*}NbS,yXYVgJe|t;@r<UAvNF11d1>78O5pgW)`sbS @;LiMLtaGC+}S+G8|LU.z3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
