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
define('DB_NAME', 'j1995031_momi');

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
define('AUTH_KEY',         'OEw=SRB!rpE7bx}4u`u/9[]w|B2|DShmY7K=2Xe$PpH-%T=fF:) 5VGz~G8.E2R}');
define('SECURE_AUTH_KEY',  '8wcf(Uf&k}!D@NMTHnZ8uqNsg?p<e{^#X,?g`$9ds}eK>E[VKbpN}5.U;~29Xvj3');
define('LOGGED_IN_KEY',    'lSQy2-:L]Jh$f]2vz5M.<@A! Y,THgNKZ/z!56.YC_`ZsSBbBZHD &~%YsrTsbd9');
define('NONCE_KEY',        'Q}1^6_tjnFyZFwTL/4@h(/H~Q1g[k {&e&.2h*$<))Ed(?0D7x74EDnH6y_*>Bku');
define('AUTH_SALT',        'wuP<m@5gFa}Ho~B0al,Q3xu..2%W(L8qONw/N$=UYWK/SV5Y/A#%TgGat0y[tl?|');
define('SECURE_AUTH_SALT', '0w yn*hz0Is-R2G^lJewV]qa`F.:U;Lk,Ow<h{_n{ahzN.RQ6O~G.N5=6.HIxX*2');
define('LOGGED_IN_SALT',   '7Yp1)nW>H2OgOyvw>vT>irk]=|,Di9^!uCmOc;Nbv|3g:E(/_qyA+1mXp&!~4$j:');
define('NONCE_SALT',       '{aR$b^NiR 7on@74cgq]:;:|IcwQ6{/ox0}Zan-Y=3 C [njWb{(;5^L;#jiy<p_');

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
