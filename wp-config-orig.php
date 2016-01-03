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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@mq_dTyhscef}|#Iy@LPJ0@=UA2p611%P>;@-uM.iY-z|NErpievkYfo{|F+cH9b');
define('SECURE_AUTH_KEY',  'v;Cb~k-i%mbxrO3o>@HK0> ,nOs];.2xc=C%R~}o01l,w-||YyA5x3Q]J0szx>Kd');
define('LOGGED_IN_KEY',    'cJ}lntfzI7F_ ~vM-Albx&u|r!)6d]}+ec+zHk-:pDN,-!2JFsM[]-<;n<Z#N_0(');
define('NONCE_KEY',        'Z#IA7#XdBwMIqX5E1f>uL)s^UE^,p/.ZJ5>Qv4wRt!2$OREk0ALTSUxLqcOmad/;');
define('AUTH_SALT',        '}-7O$:BZ/@Z-(*O0j`(|~<-X)lC&*rG9#7}KE/$-v*pqhwfE7OOCpbMHLbO#3U0=');
define('SECURE_AUTH_SALT', 'x)0M=e|2fPw+*r$J658nQ}H,-gbMk5<a}YADug$2n8OT!aKLa@qVL~] Zq4M[kt+');
define('LOGGED_IN_SALT',   '~7>=twuK>tn9qbFrs>E1#y0)6YoFSfD9+A+8hPaW!GA`rZ:%l#d1H.w1_Bm4{`Tu');
define('NONCE_SALT',       'b-U!F,^78rQdor^KP,G<8%T$T)8M*}?O2As7`a{[3Jd?fHSQu>]Zmh-5buYhyTNz');

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
