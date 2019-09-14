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
define('AUTH_KEY',         'np121+NbB0Mnb8mQwWY4jMxHX4fFD233Nt1Ud4Bn4qT3ZzPF062hmKoh1mZGLNo4wDGahM0rWmywpWsiBrOl7w==');
define('SECURE_AUTH_KEY',  'YE4BnQq1N0rbWLUbInHdZDMm6oJksclAOnlAqKI7zoOnIjFYcK3dAPhdffBFf+K+Dz16c6Dgb+0GjmMe0caDrg==');
define('LOGGED_IN_KEY',    'FWo6LtSez8JebUvn7403viZ2qFh89X9DcmtLRfRzbt7XxJtC+3/Rl8AtXzTkFlf0I+l21U2TwlPa3EnNODtSPQ==');
define('NONCE_KEY',        'K0nAfdgOhgx9QeAT6Dknfu69KX4Ofu958MxYqZWW7UYPLa7mJ4aJFsnitRK/FsmTO2jlF3kMnm6iUfuKdqoGcw==');
define('AUTH_SALT',        'S98vaTsL8qvabWW6bpUCSohsDUbFdQqB0il/N75X8Jp1UvqDiXrlOqPqY4BXmJllCbCs4Uh9z6ngx933OnD1BA==');
define('SECURE_AUTH_SALT', 'MtYM0J9K8WqVIwu70MyQJS50vtS+pSjigYa/fK2m7cuiL8MXhOzVI7nKIgiIKSZzIlnfoZLtV71CWD+XQE7c0w==');
define('LOGGED_IN_SALT',   'xbCJd9F7IZRkPxYNewB2RWuufV5nW9sOdpOUF3RSq4K/tHue/JGbfUIAKCluzqwD5DhEi6hr4+EBvgncHg5IAA==');
define('NONCE_SALT',       'GPH5cav6hWmMgpSFgujDdAVFS89PzwQi7+mDHh7j3+NO4S+MLnDG6MpDpAYKnCYAkyK25iOnf3Ht+KqbQ3UqLA==');

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
