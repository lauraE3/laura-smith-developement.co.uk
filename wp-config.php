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
define('DB_NAME', 'laura_smith_development_co_uk');
//define('DB_NAME', 'ls_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'laura_smith_development_co_uk');

/** MySQL hostname */
define('DB_HOST', 'localhsot');

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
define('AUTH_KEY',         '~gS$X5[#y%sjNm~2<%06#-qq|NWwG$r*$=}W0*dyrb#K51|g?[Q|Hk,2cbvAfT&9');
define('SECURE_AUTH_KEY',  'mQg]cSsSp#SE/H|mM-R--FAH1-zxGv-AJEz}%|Q6@MI8kVJ|=yQav$-teK-D,hj@');
define('LOGGED_IN_KEY',    'ldJc8gvC1:l;=N<(L^tRDe$mW.Gv+ YdGfOUy4-[3eZ`*pTl>&-QNH=rS/{O/@#:');
define('NONCE_KEY',        '10`5pQ 5-4|XnBy)w@G V/LhJq.m|^|?CUnqL;p=o@Qhek BM*ZOX>(RtcMPxX+*');
define('AUTH_SALT',        'Jh(>m8x~`WkG;UGm%3b+,p7MF=L-[GuY,N@x, U6->&N7N*+)[]Qcw;&y_!=47$-');
define('SECURE_AUTH_SALT', '6*d/:s2aw<_sDdQm&9OY%d]ej62-pMU|n|6uDiEAX= Cku@-L[5K^ |nr/!Bmpoi');
define('LOGGED_IN_SALT',   '3=f}8rw8b+^z jvdvQ:i{c+/xdA-R/NrvTR,,>g?vP&BpEJc-QSzzq6H1SJy~^-Z');
define('NONCE_SALT',       'OMawO`m*(/,T96q7;V|`2[1=x-Y7Z6/E<GkDD5EPS>.X]I*Z%G>Ql2>h#kgwpd4#');

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
