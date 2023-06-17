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
define( 'DB_NAME', 'Karina_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'eC2If1RkAs}B8qP~3b+7fg?s&&~8hcaRou.viPx/x45HZQHu*0GN1)25RDBGk~/&' );
define( 'SECURE_AUTH_KEY',  '$k00vu7lI+095GDvW63=sX)ZI~}L=*j82j eX]Kd~Il)W4#QJWno]_:x$3LTP9i_' );
define( 'LOGGED_IN_KEY',    'Ro7!h +JAi8.XRl4g&:T|y~UBB2`~LP{s0,8A3nxWG_#4n9mz6nbf;1ZqE,B a?-' );
define( 'NONCE_KEY',        'O)Noc28U;zBC98}|]^9>PU8deHO~&E]59nB%5U{xb/Kr%X$l%.QV1U /]a;mJJLR' );
define( 'AUTH_SALT',        '^%d&K]wjDFMR6,Ct2Mg]WZ0@xyG0idn`FP<qUo*0{s~ <-~i}RM+aQu*E< Ut[*$' );
define( 'SECURE_AUTH_SALT', '@CMXzkpq)DD{iaaj+`l|kv/ V4<.b;)z{N$>w:/GC_uf*a:3;:x*uS+9]U5:Ihr.' );
define( 'LOGGED_IN_SALT',   'MK+Y_o~:9JBk9Yd~BiRKAiS!;Zg@6*___#mqE^oN3%haAw#ArG%)]&i#W{+?slV&' );
define( 'NONCE_SALT',       '9P@=mBI{Wc=8^;8VLvIB]$j>;/Sm.:D*|u5#1Y<qZ!3OdbN6s~O0vaTX[v~^u>*8' );

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
