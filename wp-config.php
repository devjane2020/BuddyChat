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
define( 'DB_NAME', 'BuddyChat' );

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
define( 'AUTH_KEY',         'ho&1z+U)_!avw9rX$V:6vS.#1<o1]x8k?4AXT<!hp?I5%y=#tVyyrv-k&=<{>{1d' );
define( 'SECURE_AUTH_KEY',  '2?btm,NDKyb>+*K8 J~s~mn3BA]fCR+[7]GwdKbm090hSc1PeSTGqL*xq2!KT)sU' );
define( 'LOGGED_IN_KEY',    'A`dZJzcCF=2AN?yAp-f5E[a;G:d(:n+=:(B(bG|>R]4h!)Jg`:ZrD`N1A9)$rJ{1' );
define( 'NONCE_KEY',        '_cr(1O7HOdN(!rjRg9E1o&?FX<R`Za`9?zr#M%p#C,,iktWm&EL_7h46=P?o3H@,' );
define( 'AUTH_SALT',        'Z-Pp;l^xS8}]uq5DHG8e%e`Z.l|eL{(<4[)#X2R_%9(7>W~bNVRc%8qV!_f5KI.s' );
define( 'SECURE_AUTH_SALT', ']s%K7d`LV[$4C3{#^u/IUBmuA7@3suFx(P0tl~.O.KMlOV^o.0:M61_,^*`r#9p(' );
define( 'LOGGED_IN_SALT',   'vl.u+HNi0dIpmH2Ct]ilX2,f{KH2o;cu_m=)=71>7K8&9ZD#;tdC_J7X`+Qei_FB' );
define( 'NONCE_SALT',       '4:P&h0Q+CYk+w.Lb&nwN)*=<n|*Md.<^rXPd?_Tw4sA5THUe>1kpVsDb*e{L&olz' );

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
