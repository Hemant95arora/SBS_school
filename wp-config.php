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
define( 'DB_NAME', 'sbsschool' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+;3U!6u`(2HW:yu={/YGv` }|RcPR;:}&JTpS$$cTc2)grqN#x$F`8j6kqAP2mSt' );
define( 'SECURE_AUTH_KEY',  'f=[_ZuH;[J(jp.vx2&KZc7$&nTRhb!CSZ_yCkahVij0@>!]KJQ>O(9KPXE)6SDF9' );
define( 'LOGGED_IN_KEY',    'n@dA[n6 )>&)x4U3K:AmyA+N9uny5[@I=Bs*S>R+agO=L:1@~skpZFAr$}SQEI*s' );
define( 'NONCE_KEY',        '1hQwX+pv<CO]<Y3Ea/H9gM@?}2IQSR{#WHb%JV!qry^`pXa8/wPMK3^*N~0:-=^1' );
define( 'AUTH_SALT',        'mxtRn(ZS>R>K?L~;4g7fT>X$kgs[{5VhIJq5z5)}j)](yDRm?/,RDnq*e|oG )3l' );
define( 'SECURE_AUTH_SALT', 'ciX%rc@VGF8.caa3/ezz_DKs/3fm?cq9fh(bHo=2-k Wz(+^/(lK$9Y19smQU)}p' );
define( 'LOGGED_IN_SALT',   'c.!_oy/Gs$^&tM#>l*F-.H7~vd$kyVXt,Wf{3^|*Nto2;jA~&Af|==yPk/0Hn?t{' );
define( 'NONCE_SALT',       '*%%lVxEic1BbU@eSvj?p!h!>D ,qz^ZAarA6]@1h9rBnr?C;H$Ge4AaV2-%^ORj*' );

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
