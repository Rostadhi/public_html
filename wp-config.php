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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kadvisor_wp_ugxtg' );

/** MySQL database username */
define( 'DB_USER', 'kadvisor_wp_drhum' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jhJVs4uU%432ed&g' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '[q*Bkb7(|aNz87t[2vB]+D#sF6qNy5_~37X93k@1]1B)S37*d]#c2&~b:2(+:l&E');
define('SECURE_AUTH_KEY', '(/-It]@q_f9@;f&+s411lF@7_17+iN8I84T8e22_bk;Y@U3Fn2YA3LN%|KsAkb6A');
define('LOGGED_IN_KEY', '|8#]XD]3Q(BJI;2B]j%r3rDbZ!t6%[96)/I47b]H@b@UA[n9Qd2g:#3v0rzZs+mj');
define('NONCE_KEY', 'u;HNg42|&6NjPIN@%z:OY5-+(WOa3w#8gJ96NFH4an-vB+HN2RpHvnF3hp%n4~o_');
define('AUTH_SALT', '%nE%*6oA_7lLJa6r0o:_0!i7)j08X+4m28_R]SK/~1mU77EbXhM8x6d!D(7TUvo!');
define('SECURE_AUTH_SALT', '|q#r%o43%DlcG2%pkGP40|FS/at60e+CXOUqOdikuWz/1s/@E8g6y#;Z5085lfIz');
define('LOGGED_IN_SALT', 'g(90+1jpo7m[0nEAv4KA@V8z8/Mr9Rd&H7pT3MO4w7J5KC~2R3)i7l%/NgC~vn%[');
define('NONCE_SALT', '@%T~k5/D046MtI-%%5!Ezbs5Kd-X[+/%5MK]j20V7xJx(PJ]*b0BB:#;F*]54]4w');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'K6ulYQgtR_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
