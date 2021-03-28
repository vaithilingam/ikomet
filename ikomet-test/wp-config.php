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
define( 'DB_NAME', 'ikomet_test' );

/** MySQL database username */
define( 'DB_USER', 'socialhi5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chennai!43' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ds#RK8[>lnHB_Who^teS1 -^Scj,X&`2bpVu3wrEH|064plw-)8VhL?P6C.:`gUv' );
define( 'SECURE_AUTH_KEY',  '9du#UTnvA.8zzcNUlzV <5*1]5~pChc;X#/ja2h4z?38?{yQ&a #}C%65B66oc&U' );
define( 'LOGGED_IN_KEY',    'BQP>)?/^X{l+]Iaj_cZ3DUWCrC@nOdX7-Uc<t&-*B!_ *X(Vk /C1eLypeP#[Mhs' );
define( 'NONCE_KEY',        '.Dd{/_LyhhZS=h^o@tu)RTIlE t0HV:;uLcaUl&ae}Xj;wYN*YbVI_&H|3UmAuQu' );
define( 'AUTH_SALT',        '>;t#8_s!s?mFO_&T/*56;r6$p{C5VrSTq`}{Y B.<Q<K[b_;l-H9pLD2__&cQ]0R' );
define( 'SECURE_AUTH_SALT', 'w wJkU#D=!DP7@]{c>kCEK>:x5K<0to##uABg?Z^V]Wp[m/Y>u-Rm^+,:cr6)5.K' );
define( 'LOGGED_IN_SALT',   'mD)1cn]_/nYzFuWizyUT0l]}$|[xHZe?&k;b{]MG/fe3/VmoL`/v=nq?(RG_n1+7' );
define( 'NONCE_SALT',       '!vFvT^1p%Xw@OLlGOEO-S3nqI*[UJXi@A0g5UuZ[-O2z,0ZZ{^E.,789{4NWY^Gf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
