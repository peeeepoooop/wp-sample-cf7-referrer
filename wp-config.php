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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vx(Pcix0aIC]:n{|J<+Nj/Mb[5y_X7]Gg`xE]BKoq8i33.Q_>Yo<eF*t.43y7{Mf' );
define( 'SECURE_AUTH_KEY',  '){1KmX`l6@9x >j4x-mayO |5 hx@WuUE#n!=v0-LJLsL`RvC.QLbUQ1 lJ/@X+P' );
define( 'LOGGED_IN_KEY',    '=|T[zSe8)1V?<9VFtirxq 05t6e S~Nb((8=llA#3;?h$LkKO3G()AXBU+HK|vT#' );
define( 'NONCE_KEY',        'ldlMNf?hDJ4%rH,6/qaBSq9ld,Zo@7:k!Pvr;Q3M{z);:Q|#O%!K3rF<.]X)OT~a' );
define( 'AUTH_SALT',        'i)c*tAt/S)T6U^O-L<v/btF:HTuS%Um/w9BX]l[JdtUT~Cw|c6I)kfn.ZPoX/t1I' );
define( 'SECURE_AUTH_SALT', ',9!D:^^^Hs 2e`<)5t7 5CEknwZ^Fg1KXdP@FY,uIo3zh]~rzZE{K]s3xJ],J6+B' );
define( 'LOGGED_IN_SALT',   'g=lna+MnCh}%O1e@70h&R1WyZ{W#I1e[^(H^[1f%>x2iFHmx?w`|r2<.#&g5c7qU' );
define( 'NONCE_SALT',       '@W8Ah.BBm@^0 5oqy=M}2:+ Q:!-SW YRHXvW<x_ IHx]?:PND&PbN]m5j_Lv&J|' );

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
