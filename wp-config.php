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
define( 'DB_NAME', 'brad' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'PADg1l{A/]4RCx~Rd]or#TqlK-ZEUp>jRW_JV;oD#MboR@a<djX<#|`[nqv+0l,9' );
define( 'SECURE_AUTH_KEY',  'tkV9ozc49R#9$xQjlcueC[y>C}zsBJI::,vJ8miQVSD#tECn{mVclb6|#%zi!x5=' );
define( 'LOGGED_IN_KEY',    'n<b0j>Tw>k$LA*`PS/NdOcW:~MBE?lqDzgkQu*GMrD/:QrhTXt^S&a_~^;upU=OO' );
define( 'NONCE_KEY',        '`1c 4oZ&P:@n,wrK*p67hc@=O34ebrm(d6l89*ukU.uzT%Pe,kLV|J(,;B LxY0^' );
define( 'AUTH_SALT',        '&kFn~HcWk2(*2>o]m,ZH^!5n2sOe#@sRX(SO`p^~DVR-kBA[9},K$@l#c?8OlOYO' );
define( 'SECURE_AUTH_SALT', '+XZNb+2]I|.(?,~/G{M-fe*44=TslrCTOf%dy,_sbT8dP@c1f/_#Q#pK9nct=6uQ' );
define( 'LOGGED_IN_SALT',   'ujZoqVK@dIgKF4m!2V0}^#!vCw-<jGi!>@Bwwv~kb[9nWEee_w;6*@Q}.&B&*L@=' );
define( 'NONCE_SALT',       'w{~Wz7xr|2AV:whpskixw<`YR_ DkR4m>N+H;O&3md;3v,:f^7bzvNVR/$zt:Bb%' );

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
