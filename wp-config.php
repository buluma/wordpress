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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`bhQCtwz|c<4_DT-50Ck&@LPGvO.BAi6_FqM/$|s`HRQ<Qz:eUjNp;hdZ/`LY-Pi' );
define( 'SECURE_AUTH_KEY',  ']M&WgbQ}Q=IIb26k#!h# *K(sbWkcenF,X*q=r~antS)Y=W1OuMogB)d[[Y27NRp' );
define( 'LOGGED_IN_KEY',    'd]8Udv4$Cx{UHcoIL%au,OvOKNG9S4fL-~L~USdaaErT/4snR=gYhEpjv-dhpo:(' );
define( 'NONCE_KEY',        '</ARc8F#wY6g_eO*75P-A7Mrx6;vgXYcnSoprBvSBe76OfHe~[=&lP9>6=%N38C@' );
define( 'AUTH_SALT',        '^Ye0b;}W1i+S!{2Q=v}{.y^_Cw<QLzz9`IH|U2|`?2Y2jphXgP;7eepmjq~?=`vC' );
define( 'SECURE_AUTH_SALT', '>sXT{h~;!ogkYVJVq0Y(SnT6aTyF,(+9Avo&) k(|cU,gWK8m,Vm,N0H9VCVSA.*' );
define( 'LOGGED_IN_SALT',   'FrDM08>!{Bz|$5%YG>-ngiM:V?=,Ds[>6 T/m::tRyn3l@?P]q~p<[R/=X2,=tnr' );
define( 'NONCE_SALT',       'T/kz7(|;_dxW[wJlg,g+,SW 8DmK9Fo/nid,3NlgFKzn]v5r7BY*$G+w*(k6=mF*' );

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
