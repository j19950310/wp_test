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
define('DB_NAME', 'jay');

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
define('AUTH_KEY',         'PfCtxobq1<@ yh;TMaGrZ*)/TJBu)ChI|OZ8[{XkQb[?D:^NPU8j~jcP.U5%5PY>');
define('SECURE_AUTH_KEY',  'mTT.P&[SSZ8)erLMsQ@*I%Y]6K_wdG8e>r)s8WEum2<1le)]!]P:_DnAPNK ^Q!]');
define('LOGGED_IN_KEY',    'iuPF5*U8&Vg&JYt[3J=DyT8sl?u5r2t%whqBWy-V!k3u`*VC6Iek-JwQ2R27I$h?');
define('NONCE_KEY',        'v_jI;}%<mn#ucnv@RJk;@MDd5SmK1vO$&[],&SGFJb}O8et}(1,Nn{lWtvB;1MKO');
define('AUTH_SALT',        '@-dTi.{7&3G:ucsR>p?~xvuZPIp>S$i$?eOy2GmBjrcW&=#_mch/;*s[dBp[}|ws');
define('SECURE_AUTH_SALT', 'y11A=)%Nz&rpI#&ykQ9L?I`H%Bio8cL:DQH?@gO[> gl9mkWni>}xRws>XV(OFCn');
define('LOGGED_IN_SALT',   'Ec,ydb:lY4u<P)pAy<~ZHxQi6:AHL`U3i#`.?kg&j>aw9r-v1/~O#Jy0YER=<QN`');
define('NONCE_SALT',       'd>)D+q=#T)g|Mw*Zl!dci*7[yh[(,95-CN7ojM#Mb5PkDDR*(s;{Y}VPS]s0ubN[');

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
