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
define('DB_NAME', 'u396202194_db');

/** MySQL database username */
define('DB_USER', 'u396202194_root');

/** MySQL database password */
define('DB_PASSWORD', 'peparu18');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.ru');

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
define('AUTH_KEY',         '6=c#5QW@P].rDckTeHys7<TNFI..4d4^}Hxl7*$LF<vU#mfdTIr,TRI/N>akJmHB');
define('SECURE_AUTH_KEY',  'c2%r{~lp)ZfGGjm33QxBakfc%T{ J5rW[vtJ3#R_0%c`;m;QK7[t^YJv&$J-O;E*');
define('LOGGED_IN_KEY',    'b[YLM:@DA8i`*&9L)t<L!uG.9j&t@18D#TztpU~UYvyXvA=W1Ke3fx!2[UGarzw&');
define('NONCE_KEY',        'V2sI(~1Ja|SOekK?Mlmj*jNCx:eY-y*NSXgS25FzW.M:f^wdJAk/qwN}|CF] nGJ');
define('AUTH_SALT',        'vS%1a0Q6Zc sT!~(q6[z30EJiL(.l&5H-EV=My6o)4T0^4;S(<#Q_#*MTkY&|nZ;');
define('SECURE_AUTH_SALT', '-)6S!SQLB[o/15#1rKk:$}Er[R%}ni1g#S1db7pp<tT{vwvJa]&755?E6<-0hm`V');
define('LOGGED_IN_SALT',   '!yp_8EXBjJ+7.Mr|t<Z.|!:Vp+tr71wknxm $s*TB#l1[[r~ZqxG@~|)p:XC| g|');
define('NONCE_SALT',       't:(wir-#T_2>1j0Txcz4l>zrb(w,>/#B|m_K[%)_g32Xp^:t$jPZJz#;Pq9UOgY ');

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
