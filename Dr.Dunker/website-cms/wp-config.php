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
define('DB_NAME', 'zanhartpraxis');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^-,Ny1&7<y3At@/ZNT=sHS-! M+wB#M#!^cv6XUTK; &kyC8cp, nm,],Wc,Mx| ');
define('SECURE_AUTH_KEY',  'w.b !nJs?|A86k)E_}%d)@cmj7a#V<Vo303m:}yX(3SP$xBuiqRVz=uc8qr5%*JD');
define('LOGGED_IN_KEY',    'U8nEN)b/qoQi@s[-^%~()DO[Esa1Lf0R(sAj zJ1R09=m -7T ~mVZ:@Sg& nlzg');
define('NONCE_KEY',        'E#(K/.7H1[Un[E4T-cL3WC#D8LU9+QRv^p>Bw~wy?WjX%|`;6W4_)8|)Uz|-<]J`');
define('AUTH_SALT',        '9^!:8KJ`y#CeK|FIL=#p^lKp24ud<30*YQ8~+_Jk@(!H_d=y$sXLCVWWwM1!xVu2');
define('SECURE_AUTH_SALT', 'y]I[_|?7Jw+Ip^?,[5fNUY}_S|HO+%zmi:.qTPK}$FN-r#;zI4;|WYJYUoS7- 8,');
define('LOGGED_IN_SALT',   'L|I.vVvAqCjeaS)Xwio1!mQ-+a1H2 ceo7~:HkH5kvE>DN dmFmf7:e%4bJ!$&6s');
define('NONCE_SALT',       '|$u-r|xwr-BkhUs!m~2Hv$A@` IVhnSR&iLz/]yq.Z<=5R[ZJV4I}hjXdFt6XSB*');

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
