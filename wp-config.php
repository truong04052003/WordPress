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
define( 'DB_NAME', 'wordpress-zendvn' );

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
define( 'AUTH_KEY',         'SDuDn4dlILuIQ6mKuCIGvkxKpnIf7D6GWMka3lte0WL1DI5ipIyOIIH2lEkTsE7S' );
define( 'SECURE_AUTH_KEY',  'YMiBQ7Ga1KnG7Kuw7Sti1QOuWT1zZH0tPQvgblAbojkzTqO0eNKQYCS7DsF9pel5' );
define( 'LOGGED_IN_KEY',    '0zNH8sQqp33RUR6yCXmDO6gXNGQ4LbzIxS5n8d6oEpVgZGjgWAfP5fqSq8eWKfnw' );
define( 'NONCE_KEY',        'jmiOoOZGNkI3HYFz94fZBlIpEtGxyEYXfUEv46AATuxX5VOmDnKO0RYFdNOK5gpZ' );
define( 'AUTH_SALT',        'DjugEomZsTlbmaqITaTb9Y89kWrUC0IP2medYF3n0mKvfZG52puaNiXeeDtvPTmA' );
define( 'SECURE_AUTH_SALT', 'YgHIVYJi9tYl1mbRFhxnEBwS2pbhFDtHNPPUSevbpeX5p5yLpsewrJXMfs0gBwkb' );
define( 'LOGGED_IN_SALT',   'ubWBAsaR8YY5hSlK9QuM5srKIHC9rldU3cEIar8IGgi46JGbqASJzl5sJTxLtvBx' );
define( 'NONCE_SALT',       'Z7cteVAr7uXNyovDBosctknCoZ3Zd4Y8izsvsEJeXhD2LoPBrIvVGXc0djVhmtSU' );

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
