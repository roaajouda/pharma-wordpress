<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FL>4KLBV nOHU2qhU/+g[`#{C.vkw4-pzb6TMo]mKuFs5_e%a%71~_z^F[3[Ka?,' );
define( 'SECURE_AUTH_KEY',  'F$WU%BR3bA!<[k)vO0JZf|/BN%(JX|D|,&TWi%Z7?GGlFj0P3W5`%l3 .!3]UI3B' );
define( 'LOGGED_IN_KEY',    'I6!u0.#2 Fl0%Ao(Y_/:}gKmoJYEJg0y*X_K:]^j;}eq!y}{9~vKL`O5[EF/U+#d' );
define( 'NONCE_KEY',        '0B(}&CUmg,ze$@Wz0A3&uFm~t7+?fi^NID.SwEf]^V]_3V~+m::7N4H4]=b&Li<K' );
define( 'AUTH_SALT',        '#a=~-O}dBE7[]87Z>2?$ZL]uB?,Z:]^|L0`UmK:@NK]vr4pZPP8QT#rMUZ;xo[kM' );
define( 'SECURE_AUTH_SALT', '~hy=U3x*H$;R=kO@l0(,/FQs?Mg5#uUhZ8}-:!E1qoO5t-0JAl_0iWd@H|$(oHlV' );
define( 'LOGGED_IN_SALT',   '4H,|j$pOXz(6>Pi~iDj#q1/R]i81 }m.Z5dVFkm;M;28!bWf|hE~;k^CN{&p(LN[' );
define( 'NONCE_SALT',       'qaaoi^vH~+=&mI<K$6qE@?zHNa*O**~PC}kjR$8j&-N/t:h_n|9P3R$rOs+GU7f6' );

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
