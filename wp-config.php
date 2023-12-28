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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'Zi&gusEQ]n>vGrF6m H1ki=lY|}^nlH^xLn$~w6{1^n,1B+*Dr1#8B`]] $e:2rH' );
define( 'SECURE_AUTH_KEY',  '=u/]>>sD.Jw:[e|G&kZ9k&v:BA_m;a!nJ7]c;Hj8Fn~0j#eFn}SBX5I)vrV:U[w/' );
define( 'LOGGED_IN_KEY',    '-OiO~`k^0#Y/Xk(>>>^t;hCC6=#je+Y} *>VP@O}7~M-89_K$r)?fM3&Yt [>dU2' );
define( 'NONCE_KEY',        '?O<W2[9laof`7rgWuNu=dEz>yf5)s6imQ81mt}6JI(swhW{Im[SVN2,~0p@Ln:E3' );
define( 'AUTH_SALT',        'Lno#^w,qx7-rX|FMm]8q_?FL1`0yN/k+%:k3#8M~IM+B^7/OP1UKafbNcip]h%HV' );
define( 'SECURE_AUTH_SALT', 'K_FqM[8rbC,9{:p):d5.Pb*|4FMlX@t>2DdYG+I|[wU<.@#~.c-*NouPBSXUypH>' );
define( 'LOGGED_IN_SALT',   '^uBwvcn%{|o*kaK8WXCp)wX}= ;RfP-F|XGikQ|bIo3evhOtCY55un:+B(OzzZ[i' );
define( 'NONCE_SALT',       '`q<*v,2:{5AE%}!}D8C& w]W+`BM[7;fgs(:<3/p6T2`SGwMz;.Ia*iUf$Qk,;^Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
