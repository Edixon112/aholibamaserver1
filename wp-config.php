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
define( 'DB_NAME', 'basededatosaholibama' );

/** MySQL database username */
define( 'DB_USER', 'aholibamaserver1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'server1***XD' );

/** MySQL hostname */
define( 'DB_HOST', 'aholibamaserver1.chjgxshksrnh.us-east-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'W|uZs>zf2>4Q`^-6!A/t8mu$SyNSr5|X]1W<UA#TocDMQapjw#oqD~~m?TRv_.WT');
define('SECURE_AUTH_KEY',  ';32.a+(x(1BzVpdUX_b>i+|Y([:YBjj<+9K1x;[z7vLX[PUh`s#H`EUj MGu/7?h');
define('LOGGED_IN_KEY',    '*I2Y3v2v&,/F-|EJ:7@A68--.!@+2p9t{NgJ!(e.:.x~Z@h.zOJ0Bqi@7_[O4FNE');
define('NONCE_KEY',        '!S37xL:*Ei8V(3mW%F`*:gs>JOjHWdMt6!VfU,it{KB1N[EeDnDSf,><l|s|G_C2');
define('AUTH_SALT',        'x[fmRXL]T|`Ui,;0=oo+-lJkZq#rZJ:cbsC{-f5!r>|j5eTb&_RZ;<mi%Jy6!^ac');
define('SECURE_AUTH_SALT', '}YJ1%QJriOgEVmKRO?.}jri-ke:t!$?-d}qK{@*?0%=[)I9jHhi`vI3U|;b@#q<9');
define('LOGGED_IN_SALT',   'CeoZft+O>j.I@Th*FWCmy0(,|Y9|j;CcXUDR*VIz{@PpUE1fXH^6F6.}6PCQiVf+');
define('NONCE_SALT',       'U|IpK9eH;>t_56f-q4Te:jQ9-X+|o+~aGk@2wz$U:Y+;%TDfrF|jTlOAp|f&%h@@');

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
