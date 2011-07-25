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
define('DB_NAME', 'svx_blog');

/** MySQL database username */
define('DB_USER', 'twg');

/** MySQL database password */
define('DB_PASSWORD', 'twgRulez');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'ByIb{3P/&*v.x+[.0n&pl+fM}|tr@%BXwIg[Yg+;Q9}; |8b-|^lHl<SB.DNcs!^');
define('SECURE_AUTH_KEY',  'RRoj?-2V[FFWF`e.p4AC7$szhJ?Bys&JE{KoBWmg}EH%Kysb<SNBJOBZJ n}{m K');
define('LOGGED_IN_KEY',    ']+0XYVNcQrnTT|CJ:tVAIVA((~<}}+V|[-<[@,of`>JAY=>K{G([18(}7+ [7L@V');
define('NONCE_KEY',        'o#nk*=DaLK#{6n6Fr*.wdNVO]u:R<8KAA>-QxHR7~;.`TK//ccyv[J%`0jh-{!Cc');
define('AUTH_SALT',        'ABBl#o[ToOX6}NxEj9rn22*Xoz>yl(wInQ8+@,p59ARP7!Fn^;lSNU@t8{f[l5={');
define('SECURE_AUTH_SALT', '6_tMJ}aIq|K+D_p@z2bXIZK~_>-KY2|6:r4J4}QV@KIoAYyMf=,zA8#xGEOX/R|`');
define('LOGGED_IN_SALT',   'HUzyXNa4@)a+dU+>r>}7f+AgAMT-&n@eCZRlRm#NAJlHBoUd|:J+-E|(9+<0xls+');
define('NONCE_SALT',       'GF6cUBgcwyq[o @;cqa-o0s4N!X@nOe&@Rf5fYmfk-R-8x{*7VrG2o_KR9t3j.L8');

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
