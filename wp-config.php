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
define('DB_NAME', 'curadeuda');

/** MySQL database username */
define('DB_USER', 'dan');

/** MySQL database password */
define('DB_PASSWORD', 'Nana1823');

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
define('AUTH_KEY',         '99C$ZQ2$|h`f<rnWt|-+o0iFk%S6Vty/_]({.Qo|{SXY]F?[PqZfiVCP9o+B~K%-');
define('SECURE_AUTH_KEY',  '9GF6zl$=>d??-3)bN|G3qt?i,4J6`*gRXiAKzPY1A|BrHqpaKN3q|154~fQ<[Ac(');
define('LOGGED_IN_KEY',    '`k>?8,><8daomhoZ]P/Ush|Qf+93`Y96C4tgZmo&&5j@9&mip5Jz+cQ@o6j6|030');
define('NONCE_KEY',        'l=u0#o*r+$|5N2389XRk`i{3|ciuNOf&~[>yu27s5ia,IjPP|st{*hmYG**:*dQd');
define('AUTH_SALT',        'QwQEMZIZDg00R|d|1|y{(Lj}s`q%Y3i?ow=}GDcssWHgbz3{CXz)-|!8dp@787v+');
define('SECURE_AUTH_SALT', 'ky7WWq?9HBegIP&91$v v[4.[Btt`!.VFfA+pdkX4~>) 0|et`K&c|c_hn35EP<!');
define('LOGGED_IN_SALT',   'F[2YoBa5@PZ9G8H}oonI,[-Rpxy<i8ht-b+y o]4gaCu~a+6Ez+O}r$!&ty5Sl -');
define('NONCE_SALT',       '`:uI=%;i}PJ8b(`q1f-EGu2*FgTN04m=I+^l.4wHw<kbJ5w_|=9+1k|)+9ilOVA5');

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
