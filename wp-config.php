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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief_wordpress' );

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
define( 'AUTH_KEY',         'D(8OpLP_dj3b6~Nalo{MpCcEOt%8fI;!YR=<PDI1gk6`n$!FD@<v7%Kbas5H$S[M' );
define( 'SECURE_AUTH_KEY',  'rR]tGN6.}[MY,a]?c/oMGDeAm O.0 .<Wdhb7}N:fHSLOd5[SDM[HwbhtNes<h+p' );
define( 'LOGGED_IN_KEY',    'Y`VIN&pX5Xdnpk*/J5/P9VVGA9V[J<{[K HcOQ%xS]Bx_?VUIi`r F7>8H([5+M[' );
define( 'NONCE_KEY',        ')5fwa}qr+@Fk$Qx`)3~qe}C1r4/vV.KF%O41?(Hp6#WVO7}WYr|{[{-&-6<{f7&f' );
define( 'AUTH_SALT',        'AU7R]!2`n|gs;<*1BKqK7N5./eiS.a^n-`i=kmd3JO*NaPjF$,[A)__SV=bMpI4x' );
define( 'SECURE_AUTH_SALT', 'L}WWQqJn!`C<zmic 0-l(GWUzMY^gR:,;5Y%4@(Y4=o2}CapM<;Le?SA7;?u#z7D' );
define( 'LOGGED_IN_SALT',   'Sfd9NeHskuqNJJHORO3w75?XII[+v=4EflCPFD}(DA~QdO.2q;A#:)8%UuMZ{|2d' );
define( 'NONCE_SALT',       'lVb$`L7bp|[Z:mBJDDP%,ZyU*@OQY,A,M{!_II3KfWifH|IGc2~Up%{BWO:[zs}5' );

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
