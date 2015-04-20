<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webonaryRick');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
By default, WordPress keeps track of the changes you have made to your posts. 
While this may be a nice feature for a blog, it is unnecessary for an online 
dictionary. Your entries should be stored elsewhere, such as in FieldWorks. 
If you leave Post Revision Tracking on, you’ll just have extra records lying 
around in your database doing nothing. If you want to turn it off, find the 
wp-config.php in the wordpress directory. Open it with a text editor and add 
the following line in the file:
**/
define(‘WP_POST_REVISIONS’, false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-,clet.>BQ)RZRXGv>-tRf$4yxdM}&cOY)a,PS|jjkoWl7G8NT{&X`%LNSH_nq=%');
define('SECURE_AUTH_KEY',  'iVAhQWJfXi-YU%_IbWM`luY+qW1pm+_<-dP.zHi,gW;@[x/n:kg3,J-~D(`/H@Em');
define('LOGGED_IN_KEY',    'T6bsr7nCf k>K@SJ(P)!+s~|XU_(?zf?Iv};[q=U(34yis:Z}al#0&.YKz--@$]K');
define('NONCE_KEY',        'e}EA@+72/@ jhIpYJd}Y]E9E97T+8s-#h<HiToy?)|7@L=l,APo47]hG)]qa(!$|');
define('AUTH_SALT',        'em@.i=Z_DL8X{<r6crGI-swh3NCLUz/b+-c3}T-KD!Nt=S6E/~est5tgh*/LIC|+');
define('SECURE_AUTH_SALT', 'C,nw>U)D4~m+(D}V#Z+/HY)QPDZaMl_Ofy}@>l7}7bFa%LymQO%7A%VJT+lEmEEd');
define('LOGGED_IN_SALT',   '8N9^^e| SZ_<>)hOyr:wHsrJ-tg jp7Z8k7;, QEy7LK!)tORiWfOe-Qv90<0[&f');
define('NONCE_SALT',       'NAezx`a|-q;yvga:f7|vLAZpcA(BDe j~VD~Sf4#S&X8#;l|Rbq,Abt5+|8hwK4<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
