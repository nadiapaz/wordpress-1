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
define('DB_NAME', 'wordpress_desafio');

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
define('AUTH_KEY',         'mOCi(Q$$<#2UnVE[+P%etb+xtuMJs;|tcMsX.*`J%8zRbs+|_@8!|C3U**e*gl a');
define('SECURE_AUTH_KEY',  'uSEEC|V2R8a4}Q4qs3+9(WwJo#2^?7tJ0$I&*Q`:wGFOk/Ok$5:g|]2;F>A+RdV$');
define('LOGGED_IN_KEY',    'nzy=}BSD2jBL-+_]xicy9dd%,5S?xQt6WChLBPvpRH?/>U-HtmaW@o`40ZxB0ZTy');
define('NONCE_KEY',        '|JKWFBGyh3(:x6~mL0_u.;=~{k9>aDv}1%98L1jfKJ4CdrI%It-bQ8E068gyfJ{p');
define('AUTH_SALT',        'aU,9ib!DmXWx-(Te5N4*[,2$.#7p&4<QC6,JG1pALiPFj,@bJve*G8x(}2p!vdvz');
define('SECURE_AUTH_SALT', 'o!cwP&WT-3H6x5L0VH7a:<H1S(nrD|QZ1}CvqXtpNO^P9:[|87o7?OvF`u,QN5C5');
define('LOGGED_IN_SALT',   '%,b%^d|jApvT21$x~S0Eu`[Ya++;PP565^Qm{G7>[lsm&gteK_^Zm7^sH8kT;,NE');
define('NONCE_SALT',       'm!=@CE7Rid}87osHm$_M7Rfn}nWJ<%ZBQ8{NCzc#Hg.izY!*Qb7aXrPiG694YM/k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
