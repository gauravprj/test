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
define('DB_NAME', 'simple-plugin_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@%ztHN0<C^PYoK_}Oq.x8&,?/T{v<?UwL#Qskl:QBV3I}R2T7<`=VksM_5j*WbES');
define('SECURE_AUTH_KEY',  'I-}$ D1<a,]JrcqONvjQ^o;p4*i_q?jUTq}iz/{}&U.L(jrn@(/uzh<=$5Fn0-Ob');
define('LOGGED_IN_KEY',    'JHg=_4s5Sbq`Dk*NMToQ xm1RWs.OgnI%i.sVx{#-pyP79h:Df?W0(g0)c bqf$z');
define('NONCE_KEY',        'i01&OMQtOX72j*rCNKHf% A_(<run:s5HLR>FPT@yFs2F4pXY~J}+aYA9itFgr7$');
define('AUTH_SALT',        ':[[#k0/-dg.%oHLZP~-z4N8v=o/59ige!kW<IX}{-D[rlcXC$wkw(>Xd }H?y?|*');
define('SECURE_AUTH_SALT', '7utvfJc0.0U^}&>KKArX3xkG3l2GeA 6XJe^V+pQ.e~*%NQNi$XFO$Y9Kg>X.],e');
define('LOGGED_IN_SALT',   'KjKd4!hTc<Cc:4$liy*m{Npe{8zW#|T9u5pOSZmf>!SXmZ%NmQ|{b;9r2-XeF%o5');
define('NONCE_SALT',       '42E[?DHe*KlwA6c#:@raA/a@Bch$_OX+f7ZSNI.l&e@{k{^(`IgC%QN}><|>!O!K');

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
