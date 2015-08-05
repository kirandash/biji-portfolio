<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'biji-portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         ',L5zO%`y!^+Ziw41(m1MH}ftdL]XSWP,m|-,[:~B#!,m+XNGaS01XrP#eEj0B9xs');
define('SECURE_AUTH_KEY',  '@72/H+$LBMmiL4uu!C(|X|Bl%4q4zvsD,k36ADveKe%<.3dIIGs<hM GVC;[bL]t');
define('LOGGED_IN_KEY',    '?4vK H%0.G^EXs+.0X>z{&6Y4A8{95owg}Rpa`V.J&J,A3t3T]G%RXto+|Xb Qc^');
define('NONCE_KEY',        'n`@33c<eMcc9!-_E&Own`RLzwvnOUbhtneE9:&8B?Ay?&a^RWH{dH~-X^L3mA(+G');
define('AUTH_SALT',        ',<O^N-]n$7~PfhjE,`cT-Ln|NO}BTL<whU3:0+Ewx@4;e,nX!<jseF(kESuy;?2H');
define('SECURE_AUTH_SALT', 'N?-YOmhi{dHg@J@-u}f}3|8!U@D,GR}q!^F_ [~+$ZLUA{@rAQ2OOM:}<kAy9!=3');
define('LOGGED_IN_SALT',   '2OT9e]Z,FJOXj0*|X33[=HbCYYLSY]b4h-2aq}q9?xkggJ;|&F?kF*Qpp4lh{72W');
define('NONCE_SALT',       '+>zp9/8Xb:`nsFo/nq[t}]l.J5Psd_@jsnO+0-[8]/f5y96,lOPo_uuVJ<-S-p`[');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
