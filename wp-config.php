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
define('DB_NAME', 'u309941716_teste');

/** MySQL database username */
define('DB_USER', 'u309941716_teste');

/** MySQL database password */
define('DB_PASSWORD', '3JOGKKUzW7p0');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.br');

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
define('AUTH_KEY',         'd/^MB]K&HWsx~]-W3jsyosTp:|@pvddoUdCny;-~qIJU$8,pme1,ZXN^t]6*XL%o');
define('SECURE_AUTH_KEY',  'M-,/[Iy>3+_{:o+cWvvwll[EXtZ3C+`8FtN;<}_G%}N>^2bxa7En4tB%**Ij!E,T');
define('LOGGED_IN_KEY',    'DvEme&HFh;)ggnt2~OC.<|X0BZS[#a/Cr-1U)H4BzN~>.YqxnRPi0:$&} 1GU_*L');
define('NONCE_KEY',        ' aLE{:i9S[7qI)VHNKD(3P, l;ov)~FSC6^?+S_vMv?zT${O3h{FwBy6FT6J*E!+');
define('AUTH_SALT',        '/Gd<U>0[OJM!a5,._hD<m}RTLw;FPr2WdDpt|]19F.s23S3_at7,6^~cJ/9;@rVB');
define('SECURE_AUTH_SALT', ']lmo%!hr.N2~-djDwHKl|MAAFL~KhPbkZUauFK~w8N.GPdu lX s{Ss(9q5+k)vi');
define('LOGGED_IN_SALT',   '5wFMsPgcBBC~8(fkB-<cl_[cX6k6QK2pFwSQPxRiy^(hVG34sq{qI/!lSMP1@@pO');
define('NONCE_SALT',       'U1I{MSzD&D41BVlEmiYV)@F%TO=|4!@GL2`%#]mTNw~yLZ.2:.eT!Ku?p1}jYBGE');

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
