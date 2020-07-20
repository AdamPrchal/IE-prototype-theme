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

/* LOCALDEV Settings
define('DB_NAME', 'local');

define('DB_USER', 'root');

define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');
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
define('AUTH_KEY',         '+mU4BhVPw18ucXeyxVYCas+fw0mgXJQbYKnU9/YD40sE9tFBf5Wu4XvfYk1CqqnufN/2cTScyTsik+EgTa9cyQ==');
define('SECURE_AUTH_KEY',  '2njxClJOBnrBV0eWAq5DvOPWpWCd4yh0AkvJAd8g1PPiLl3Em5sqysVbnwDP9D69A+Oj8E/hfY7TTyCC0nCknA==');
define('LOGGED_IN_KEY',    '3TeTdU8ePi90PrQ/NPQOtaVYemu/KmvkrKQixiRIR/BDFLFEOQBJdoqXFkd9kroW13tWJfXtqE3pg0yh477TKw==');
define('NONCE_KEY',        'HDAhvInhLtHlrU/Q1p0nAvY6Kc5Q5XO+z/cSMZZMGruxg13I60Cq6YBzdOH2RDbWPsgh76c4rrnUpvQsrP9Zuw==');
define('AUTH_SALT',        'dNrUpXwBXAgNrKSpwzjREACwaEQ/dRqihabmS0VuwsJsQJQxfgHGipA1xV0DKRKmwPI0FO0Bk9EkW9eXM6kY2g==');
define('SECURE_AUTH_SALT', 'umQ3XL1YQjYyftkGLmgV7j4u9eY6EIuymEIR6LE4188etOqeG6BM4UpgVwkfhSsW18fhykJQs8LY6CWk97gN8A==');
define('LOGGED_IN_SALT',   'K7ghOo/xu45n+E+VU1sq2ibrhV4VY2lyVwSYNDORwL7D8Mherp3GH5IbbThZ0oYUNof1olD0/OA/yRQQO9r4Ww==');
define('NONCE_SALT',       'BKcXUyfbJA7LdhGSbN2jIyPdt/mgrfq/cf1riyvVoODJB35b8TP2GLxx7oaLCF1WiHNFUNJB88RZq3vsvQ6qGw==');

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
