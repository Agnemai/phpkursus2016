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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'sI2zok}=#JWHJ5d,_;v`<-Z)Oj/eGqP;qTnavr^BLD+A>C_FZDOd}!uHA4|ojHUa');
define('SECURE_AUTH_KEY',  't@|z%>@|(7aHS-iCYN9Ns :H(3i-&A4Ezv;-7e -RwIY9t)~cV)yTD9+pM+(S6U7');
define('LOGGED_IN_KEY',    '1RW7?L&xYRriD/P}*v1!r /l#]Ak?0Vy2clkK#lA4/9,c-xe&h@4t<pue]}g{8Sk');
define('NONCE_KEY',        '+_aN?a >0+&I0aO0vw^QP#s}B[TFwYZ>pHtKC W^W}I8M7E:~QN-zCjj  /$m:6H');
define('AUTH_SALT',        'aNO!P_i{>HebQAR|DtaFU&%=PSO@%->Qs%SPu7NF,p%f:6#`,B.|f}(T..5tV>dP');
define('SECURE_AUTH_SALT', '3z1M(MMcA>`S( b4w)F+J#?+4Vc|!MX@.{+h^vRN0V^e^-588c7;7<M_u6ofnx|[');
define('LOGGED_IN_SALT',   '+`!?& !fVn$eo@v82|8LAxRXJy^rxDU[z`Ed_Iq7.+Covq~hTgKfJyha^8.=jHr#');
define('NONCE_SALT',       '1xbs[>ocXYECV4K7ODiSg:B?ArtPfSexCIAD[Wz,0C_$kz=@}uhE`.jcWEmv@+[7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

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
