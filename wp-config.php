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
define('DB_NAME', 'freshdi1_banc');

/** MySQL database username */
define('DB_USER', 'freshdi1_admin');

/** MySQL database password */
define('DB_PASSWORD', '8}78/aZnCD');

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
define('AUTH_KEY',         '3K!`0<|;fhT ${s!Y{^r &Hq,XU_q%(>#g.1bJg+fjMVE$,u#pc*Yw^&=|,8dPyn');
define('SECURE_AUTH_KEY',  'n)3$93TO8/Uq/dHN<LMlQ-]3V/ v-5J_nauASG7Qdtp=%uR]:]hh8yVnIWHV%?Wm');
define('LOGGED_IN_KEY',    '7rPEu+Stz,su_cAu?:(K}cL0%OdKo/M[I(6*ysK}FVD/ZZMfa+g+*(+$7hqcFV>{');
define('NONCE_KEY',        'q+$/N[{QNC{;hJOJ)Z(w$sAoxRiG3Yo^(?1nr2!o.DHnJVJ=oi$s&PI A`lPaKY?');
define('AUTH_SALT',        'B:KIvY>mG<qnQ fQq[ZkzC-:&k8npxJJ[;NMbmTO|dKdlyQo-Dm(*8]hlf/+@O6p');
define('SECURE_AUTH_SALT', 'r(kh}kNz{!TJRQ?#Oz,nc1(!AJv-S*7U5W*Y*YdLD&O@G-:NblFLS.m-/r_RvrA)');
define('LOGGED_IN_SALT',   'JxQ4sxXf_|d1lQfw,+-}y48?KFu+G(%u= aiL=H,u<[2nqU:fD:{a`4)YC1F}lFa');
define('NONCE_SALT',       'hSYw]f_yq1($?~%I_4Z2U.rXX89<Pr-ONbm{eUr;_bLt(?KFTT5[wJ&iv1K//:k8');

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
