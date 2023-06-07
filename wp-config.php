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
define( 'DB_NAME', 'qualis-ensino' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'XyInqxFcGjFtLBD0YItnQpjfSP8E8LY41IeCLwCCupJ7B2rwioukhcY6PHCHR99q' );
define( 'SECURE_AUTH_KEY',  '9teF9ANQqY5DDwggOx9QGsInCN1j2qVpe6hQbYwtr4PLhLp26X8E4T9y3t1icE4c' );
define( 'LOGGED_IN_KEY',    'ICgDhlTv9a1uRisv6DihJTVebb5YjfcZBdrh6BK2lT3y4ZIf5oqWuGeiB2BSuqD3' );
define( 'NONCE_KEY',        'TYQFdG3p0OQA6dBEvrfUTYuXBMY7HpO0C3X1R1s2d6sVogDTRMi46MnrXXabRNcH' );
define( 'AUTH_SALT',        'bFNZLCyao7f4o1GhJSq2Dxp8FV1yUo5chOiMcaWu6IYzqB43pzL6jjhZjBbFZ4jT' );
define( 'SECURE_AUTH_SALT', 'va6oIcV0G339s11xpI0uwZU9UdOzzA2Zm4P6WgC6YI1NQImiScSzsdRTUHQVM3NH' );
define( 'LOGGED_IN_SALT',   '6j8lQX2NpeYYHMcNGOjWzq8ZuBReRoizKb1vQSQESydACWFwRCbSU1XDsfrv5Onx' );
define( 'NONCE_SALT',       'HjE4iEZA6rTgtzHPU2ocrAcAryMBHC5zD5NxkUjgkr6lJtfzSjLzA3iKZEP69ww7' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
