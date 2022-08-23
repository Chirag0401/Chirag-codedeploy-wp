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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'chirag1-database-1.cnbwakbdzeez.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'UBbt~(5T8?4LFIRxFS$3VR8^GDgt*#/dZw12, 4qav7CqjL36q8i$$/y /9n e+J' );
define( 'SECURE_AUTH_KEY',  '9<W/5= Lq*0j^M7^X_~1{b>dxq{pB+}*r:/]TTX`RVp{]v2)W{O%%^:;9a+d/-(r' );
define( 'LOGGED_IN_KEY',    '>Gg&K+r/tA3PG{k_$Kc{<xKBtMJFtP2/f@QUfO]>).gCEAW>oeL@>.tF,V:./LXG' );
define( 'NONCE_KEY',        ':R uG@=ZWp1(bcg/S594Mb*VMRH1rtIKKzX|5=k9xz HrO=Wr}ICh3MOr!kbXP6e' );
define( 'AUTH_SALT',        '%8/k!V.g}&iay gMz@eeMb!y#`0MjSVZOYJ0/EW3r#bE5;ygwA`u0r4~UV4/)U3V' );
define( 'SECURE_AUTH_SALT', '6@XN_saD@FOLcB[Df*h[$^|@3].gFr[Z-$vwrFDGF4{LXRxqVB:f#NWZMamwB,1!' );
define( 'LOGGED_IN_SALT',   '?gd<8-rwb~ib?;S+[o;6e<{5j3!$kulHQP-2`x|>1H:1v32YPv)66iQ9l2bO!YGG' );
define( 'NONCE_SALT',       '>|;5}t7~F)IG^`EfYOXhwdnra3HFMR>s; jf@/kgwjLd>20TN+0DWc|5B$~6GB+2' );

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
