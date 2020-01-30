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
define( 'DB_NAME', 'worpress_1' );

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
define( 'AUTH_KEY',         '+Md^0Ytd//P{si+QqaDZ48j3-6.*%jTRa*CyJEJQZ6,%s2%at5a!T.Bn#(dsf/Eu' );
define( 'SECURE_AUTH_KEY',  '(M)s(~VAug{sZy9u2Cc>DYmcp8ImXyij#z0~[WQhZqCeF!o(3<4q0KOVqO/hKjxT' );
define( 'LOGGED_IN_KEY',    '<|AAL$h/CgeFJn$L:y ++]Tc]UjKbBrzRj{3tG|hOgOj^:8/Y%ixWe/:9l?u&RZy' );
define( 'NONCE_KEY',        'RZ*`?eejGJw?IKP,fi5 g-%,U/V>KOs{w}8*5Wp4jnttSKy$u._}M/rP#oPvpB>q' );
define( 'AUTH_SALT',        'ZJy )940629P8{M8,?QhY,(-0AJFJ*r)H,FBmUr3WOUX*52eJ0:Gr?gy28w5#:UH' );
define( 'SECURE_AUTH_SALT', '8V*eF!k}[W[}<Xhaq7gP!Q1-h`U[y7:)dG,:/&c%5?.K$nP9qO1b_~}ti5I+e38n' );
define( 'LOGGED_IN_SALT',   '#l60_qvL{.w-);E$dU58(H=!d,v>b<!QGTPOe1~EWIA1&FJ?Eu!h,YC:gqVv<|X9' );
define( 'NONCE_SALT',       '%^$ 76-y4tOJ[O{Le>w;A G}{wsv%raJ3)U8XI*>G?2(MDU?a}gx6GAtog(Awp=u' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
