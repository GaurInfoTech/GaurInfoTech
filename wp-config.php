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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',          'p-(ei@$W:G>:w;?Ol>N,kYI/4N7~UN@9tL)JIv,Vmaj^@JgNm)e& $$0*I%F1&ny' );
define( 'SECURE_AUTH_KEY',   'J_f7wI}l=_I^rPXxRTk48doo.eEmqmm|?-},H+MSx[>$S)zkPH-HZ9xuf4fv?yx_' );
define( 'LOGGED_IN_KEY',     '_+__k_w= GGlo?mHBc#mAv<VWu$>DnuA/cG7m[/98%:#w/}tg5>>4umY[8iU#hKK' );
define( 'NONCE_KEY',         ' I|InQ{-rJ[p|nM_U.$L>%gB6o4.@:SS>LBKuBP@>~XBxC jU|= (98Hh4y{Nr^q' );
define( 'AUTH_SALT',         ',T;(uI-sLxgrqMy4:&^dVKP)bnuT$_Y@6mx}uffjMR>g&-t;WQi4vnj:DQ]QQDa4' );
define( 'SECURE_AUTH_SALT',  '?YUy@`z!s(+j|Oj9UN0dk~TwMqxm]HkUA9+F9P+]HCFVzI.$nL%FTr9=00|_@cOb' );
define( 'LOGGED_IN_SALT',    'w@={9%RF}QZx_$0Zb6ThIEWK[J<$1u!l6<22f(J} x0-kS2LyD3jW0/K#|k+Gzr*' );
define( 'NONCE_SALT',        'WcH0;iZvI){)~^f?)xRXz^Qt^)Xx8/_p@P]%|K.*Q39Xt(J<1WIdq*I%pssB%S1t' );
define( 'WP_CACHE_KEY_SALT', 'N5nj*B;#AfD:R0u^,?_X}~@Yl-wXjq2dEcx,zB|@}#W6i]is~,6-i!=PU3arT)fx' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
