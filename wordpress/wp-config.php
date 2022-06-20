<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** Database username */
define( 'DB_USER', 'admin');

/** Database password */
define( 'DB_PASSWORD', 'drsight@wordpress');

/** Database hostname */
define( 'DB_HOST', 'db');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c3dab5edb3b6b2a75b7b2cf761a5565d885f5763');
define( 'SECURE_AUTH_KEY',  'c2656600bc7f1feee8ccf894eac9a6f128465d6e');
define( 'LOGGED_IN_KEY',    'e822914dc465336368e3646109ea9747804b39d0');
define( 'NONCE_KEY',        'd5f4f23e6e3104b2732cac19df95b8e8a8d0931e');
define( 'AUTH_SALT',        '29e5c24c76f2605ad364471e9a4a4a9f3a504e10');
define( 'SECURE_AUTH_SALT', '62bb81256b6b6b95babf0339357940b208d0b991');
define( 'LOGGED_IN_SALT',   '07a27405b2bd90c39a52b988461362bb920caefb');
define( 'NONCE_SALT',       '442cf855b874cda4ec961ce98a2b94f1390da11d');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
