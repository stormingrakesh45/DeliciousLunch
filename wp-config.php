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
define( 'DB_NAME', 'foodmania' );

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
define( 'AUTH_KEY',         'm%gdhkB^owPzi3tW8 ^p8~1mXXw|FD1L:b#~]s3kN[=;nGQ!PLCd?*Z3|8.5O,ba' );
define( 'SECURE_AUTH_KEY',  'I^3yG;rX|v+ULP`.62t8Y=z|H7-]6Sjcow0e@fuyyb2hw=}<>=)Vj^xr`[s*[x`M' );
define( 'LOGGED_IN_KEY',    'd7QT]r/To6b9guG.*|h|+O+At=aliE.4!p}I5#/9G<4U#85W9w7;N~,`Z5=~?#Hw' );
define( 'NONCE_KEY',        'O$cIUMp[ae^d[L;HziJr{8#VEF.;pRn3x3)l{W+?&KAF_Fne+5A9<*$nWH)b$y7E' );
define( 'AUTH_SALT',        'j#)jSs<E<Dc`7135NisH)X5!}|j<~0NMG~|g?yZLy$|3?3l~BlAb-P@b<7^nf`5d' );
define( 'SECURE_AUTH_SALT', 'U`V]2#|9*T2pL0bk<LWr/6s,vfV7t0mn=5v~N`Fb.%EbYd=]gFebi*qX6=i4Dc?D' );
define( 'LOGGED_IN_SALT',   'c6JIW|tH|0L[YlMB&hzlyD->$n[2W-gL:S-bAmP(p^4mp?PZ?*>FK17FXeooMZ@}' );
define( 'NONCE_SALT',       '/xTW9`kbi[ezFR:T@HYs#<+ijDV>@:(V)l D:hiuW,B%AIHp5=/;_<3fKduswTt`' );

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
