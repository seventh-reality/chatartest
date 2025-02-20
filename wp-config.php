<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chatartest_db' );

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
define( 'AUTH_KEY',         '5S*IoPGC5LH[Hq2-w^%[$M/gMLXccvJi6kVsG]2SK=qe^40*J@@AyvLCpWhs:[Q$' );
define( 'SECURE_AUTH_KEY',  ':;6R,JcW^jIHHJW!eiBh5cmro`Kb5f]&~3bUYqE<*5j]~MT/?l<X7R#SM9iEqH5i' );
define( 'LOGGED_IN_KEY',    '7H<y|`9hc2J=t3d~P+a|soyI0=[24bR9my%))H42ky^-)a1L8@)#im}yanrfYg:0' );
define( 'NONCE_KEY',        '!)gI4sQiFqr6ht}XI[$W5_]aGD4O|gT8M^,)]HYf$9$>IX9Ru5^%V`mcys,J3|x/' );
define( 'AUTH_SALT',        '*z+K*{ r=9V_?rYouJ:2$2*#U@M#{)}NN|G</XAa;1wQbCiHQ0.cT;X4!<}<V!,S' );
define( 'SECURE_AUTH_SALT', '}KlilgH9XrjDpY]}Fir/hTgvMBtA5S$u:.~$X6<@N(T)c4FiM_=F.lsc=tLM<*9c' );
define( 'LOGGED_IN_SALT',   'WJ{l-2vBR(~S4=8vm}`Wc6drjLgt691bJD/][{>.J|+Au9Hv1*Y3]b+mU2<[+ljB' );
define( 'NONCE_SALT',       '{}LT/:^.2pJNRv{B ZYcQTMFdL4{l$4vdLkOYp~JXdx4R8/P`p,_#~%3V_R?dx,q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
