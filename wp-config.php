<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'eU9PnqEW=]q~l?n&J/+&+(!?mjW`9KES;*ToR$!MU-&4*&&4`d0%b+/yka|z}k|l');
define('SECURE_AUTH_KEY',  'P_=j+PTvB(M7gbVr<NX$yR3-F8.n.-%+4:iQhjS&&uP(GKa=H:?SU1I~l^;W%-+Z');
define('LOGGED_IN_KEY',    '+wF!socdS5G?VdfWEeF-T+-Q6]GJH-J$~:#S_&1{W=Y-@GvLF6 6&TkQ_g|j|4]l');
define('NONCE_KEY',        '$A(cg3pT!g]<AT^-GYgxu/:JZp3(Q+n6RlEr/?)@>r9+{|2`oD<a-}^FEj(+Q_ u');
define('AUTH_SALT',        'uP:@xUPqR:hM31Mb&bb-#_RkCY`G2mGi4-k:wWS$)q.nr2W,bU~W-YoLrO>*6hg-');
define('SECURE_AUTH_SALT', 'e0DY:j#-6F(0cjw74uRLO{1gv}fHLdcV<ka*.cvSd4#~F~ `-}%?KswDys=Aw;tm');
define('LOGGED_IN_SALT',   '+x~~@BLr,#nJQZ4J*CWFZ5bC(g6W@b*-K<Z2]9Go4LL{?nN~^YV,XK7x2QN4FN 9');
define('NONCE_SALT',       '&&u)h:R4EHiR/aG+?sYLr|9.8`R6D.*]0Gi{Yg9l&]v-_`E<i@ A3i#0BL8M #+f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
