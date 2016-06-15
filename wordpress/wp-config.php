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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'fEprg~^iMk5l~yqyNGC j) w]dotHjo6!mdP+KO!dSnRiF0DO71,a>KhH=h%cmu)');
define('SECURE_AUTH_KEY',  '~%P$Sw$4,peboA`zRq@,J%/~__0J{!y<&G*Au?GnFZq0^-OwsujyOMJpY(~aSk32');
define('LOGGED_IN_KEY',    'zDX8?,xteVDsandDx2Fg8llK|HeIN`Qkwr}Ay*ZCCK>Aq.^#~LT?+|&J]S<jo}6x');
define('NONCE_KEY',        ',g#kE-OLwiGj.MsHB@{m{E6CoJ|s7&z)[0Hk,@Nl+_OD}obbCQ[x8)hd:&t*t~9a');
define('AUTH_SALT',        'r[GV_`]S,%VcqD^AWzc Q5%TZE%%k,xTzRFx&Y{y0E%@]gc!STW?<<l:Toq,BI*Y');
define('SECURE_AUTH_SALT', 'zztaeja1H-^T+QDqp#UttdJ|=R}9be0i9[N_^]J0`!zR7>#?gMN7^-$@Eiq5Kk>.');
define('LOGGED_IN_SALT',   'a|79nP=!uSH%C&tO-1]Sd?b,Bl(YcxQPsSP&PZn%1^={p-=X&u.qgE-|DC0JK!1=');
define('NONCE_SALT',       '+j@e~!d9m]RQjnUm1`o3(1h`c1n>T/neqy?Pz=VNR,$NBs!w8e=;hShZYgjFs/|w');

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
