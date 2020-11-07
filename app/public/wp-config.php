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
define('AUTH_KEY',         'SCNuyB6UbClQyCS4Q3lL3XrXQSIVEme0gnOGQl8Rs6iy6sU3MwaBwWMXhXrrcVUT7uCtCEY40bVKI+rstWDfzg==');
define('SECURE_AUTH_KEY',  'l6hVh+jCZDvXaDzhG1obFMdO26N0I7hRaFzOd6IlY2mYINlT0vYFjvEkhUxziGG6RtMwao3wBwuDBBQz6joj5A==');
define('LOGGED_IN_KEY',    '93TRG0xTS9+kQmX97UoJnxxBqPyMmzpA+EjC+wM6SVObWaPtcHdidMXshhf+3eWwgSgN0JBK5Ao+1PIBfPoQZw==');
define('NONCE_KEY',        'gKp/gil97paLBdU4B4CbXNVyZGXcQpgJR0fFrV4FAtQ8qp/z+YXOHUURAfB6pPb+9iyPFciMYBbZbgoYlHkE9Q==');
define('AUTH_SALT',        '7e7BKmmDbAdaaefsR+cxsPAR8VYFslY296mLtQesG1YistEfqBrbE1T1Lym9Mt3IQ4LpvjXfAScqKO/zqIBZIw==');
define('SECURE_AUTH_SALT', 'Bi5/XQRfEcbuPC1NFZTJZtLz0XhWod7BeQ3SSEqdfJ+hj1SLem23xstxLZia3tH2eOGMU2HSSq05n+J28OqRag==');
define('LOGGED_IN_SALT',   'Sc1ZokhiS4nE5P3qP+z3Dl+c2PO/m1vIMeqM0OyHlHtONmYlp+pOOtsc5HBk6i3+92H6cklhi1X3UJG0YcDF+A==');
define('NONCE_SALT',       'fD+QZh4z/8mBGbnkHE87c6qEWIf29Jw+26aZBoh48FOp7zPJm6ufqNl+lN6woYnpmkxiOVtZFIpccAfIddPRFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
