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
define('DB_NAME', 'ninetee7_wp340');

/** MySQL database username */
define('DB_USER', 'ninetee7_wp340');

/** MySQL database password */
define('DB_PASSWORD', 'y).8Hp=,yvWh');

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
define('AUTH_KEY',         'GW1seE9q[hGzaosZ3$ZX|w2+M=Fs&K|a&%oYeKx18#G=qqX,,D3*hKZ&eE-Yi=[y');
define('SECURE_AUTH_KEY',  'Zp8fTp|<qs]:DsWcZ@@X6`1T {i|% vuHExjv7V0d:h1?FDu*p{3u*{Jub7po:e{');
define('LOGGED_IN_KEY',    '{JgTd!-S!0qQ6CHa%yX2[z? Vypy]]w*3-ms]05845QR&jR7}>vkmpL%AoYF((i ');
define('NONCE_KEY',        'K(2tS^$:tl^QzaX~Lgq0u#nTxGwSb/7zMRNP`WI~=/B@)tf6pk 8GxD%;~~P[^zd');
define('AUTH_SALT',        'pL4(SGO]x,kZJCp>A]5BCD>hGO+Es#Y|hYuX~2):zxU^3rw9H}FgFgppDth8T_fq');
define('SECURE_AUTH_SALT', '_[JZA?%?Q-INJ-0C$*-[Hm<Y>|St8a)w8z-)JmiV#HkJI-uf3WRNhCSgQv/e22d)');
define('LOGGED_IN_SALT',   '*GU=U$$*R^E4/R=_K-[Tt(A= UD58`j+^~N[lsb@P1y,nPG6$9&k4A(s 9Yi-|{z');
define('NONCE_SALT',       'p.F3M;hmu3VeYmh_YrJyHp#8k4KjzZP0o_s&|k+!Nu3{_V-#ebH-.#_~m$LbkN[x');

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
