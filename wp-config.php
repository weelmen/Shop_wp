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
define( 'DB_NAME', 'shopdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'aDHfV8;zU mBM)N(`P8%2Z8JR8CE7>3+(L[Yr9)a0[ML:/t?)yUV~Xk+K&DPvmn-' );
define( 'SECURE_AUTH_KEY',  '2hLf6Oc<Mff 4=UrAl>Bm#u[*zpvbu8mB9`m*_:}}S?e8w,Jo-qK~0xE-w?:}[<T' );
define( 'LOGGED_IN_KEY',    '/%obc%kOliuN$^RknEQ;R5U)L1T1z:c;R(&{k-qw#xP E1GivG{S$PN-pW`}U;=m' );
define( 'NONCE_KEY',        'wULV>?38^-A_A,B6>[*<=?P=]c4PsK69m}+U~.rV* %4GTt[)jN(|:hY:llR <#8' );
define( 'AUTH_SALT',        'kl 6Z.Ts_ 4c%|D*![tG,V$Q#0Oy}~MjQmgyWj-IT%?Lt|.-ig=x~-9<xjPROJq6' );
define( 'SECURE_AUTH_SALT', 'DF|Lrhb8Ovz`}bLzxQJ-/n^d5i53&:8Mfb]hLk<k%tH(Kv?4+ILLN3}4)<7`h;,G' );
define( 'LOGGED_IN_SALT',   ' hMi~@w;&6&7aI^UHdE1ef{L: kR;49Q6Ql8XbgA[vv[VKp01@}n <#g0tUj`)i)' );
define( 'NONCE_SALT',       'Vv*_n/nXW#IC#*(+}ooEwlR|KCiR`Ke`:bgrUI[]XCs6tNl$)rGK>QiLOQ;e^xdh' );

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
