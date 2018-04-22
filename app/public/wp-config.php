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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EUa2Lg4r4TXGSJZE9/ZxnELCPvj5dwqP3a1UAsJa9R9fQRMtmo47OkJqFQlX/i9YIQfVAC8MCTuRHA6Bj86OvQ==');
define('SECURE_AUTH_KEY',  'LD1hv9NgOjMLwivLLppobZseYlV3pisMjZHEvK5g5isZalDevsWRibhmboL54V27bqHXuMvwkAkJnvosmC14UA==');
define('LOGGED_IN_KEY',    '4g3DRI4mCT6RKGjLh2vlwZHxgDbTT8y2dvtcEbYZVWKXf4O5EmnJaoMzxtc2wC8PcNRrXFr6hCrCVl95OmvyUg==');
define('NONCE_KEY',        'my/t52mardd9Xy5hTYySYMvPuVj2yuJqenppWmQrCii5SUUsVKMYRYDrFef8Wk9vDZCjhKUMe3aOXM4sHhlaNw==');
define('AUTH_SALT',        'KwcT6OpqTyeccCtzF1LHzUAHp4LmYKb6N6EVQdEn3Y3Ra+CiN3KJBoWr76xQs6rS9USVit7CGzkjT0VyDzHEWQ==');
define('SECURE_AUTH_SALT', 'eNqOBVknMfY5blSfYty0AlJGoXaISf9gb6KPYHCpUGwHQ/g9l+X/Putudx6OVAakmskIuJZHTwG+ShMyOn/Txw==');
define('LOGGED_IN_SALT',   'pz6t2LIAoKqJHFVeYY1e6d56mFBbHb6WPWHI8YUCTjItZD7pZHUbLr8DWRb0UW5CHLty6GRAiHag9j9Drcfs5w==');
define('NONCE_SALT',       '4D73Lr1/a9BfSlR0orU9WAcvyoWec/vQM+bootAkWyxn1QiKSzTsbmJDcMqVHqkhKV8t772gI49PW+7efiys6g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
