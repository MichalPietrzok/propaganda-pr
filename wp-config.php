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
define( 'DB_NAME', 'PR' );

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
define( 'AUTH_KEY',         'm#[>KOUUPV.Jt#C ecMX-LLu4#J6S2c[Jj<vnu%)>Av%> 1V_?r`~~7~bu!!mdwo' );
define( 'SECURE_AUTH_KEY',  '>>K=OKV[G+g.4U5Y.>aUAv_z&T^[*~9{Aq^MFu[Xg=Y&xfMw&=@;H!3@gzs3X?&z' );
define( 'LOGGED_IN_KEY',    'uP@_c(dc<JPAY;6$+|PW@d-7 iT*PntvrO`{sl> xg>pM tm|AdK$b2h/$yW!= Z' );
define( 'NONCE_KEY',        '3M z:J]%.qubmwbYQ&<zAsp/1;ottw@+ga!$S#8^cpj~eZ-2c=&{Nc%.,^i?zQ3y' );
define( 'AUTH_SALT',        'i~FeHIEFUA&$#Mw1fPSODVv&y<<9:fe!*`#v/-slbzeRLDA$nDYJ@>X%WEX)4CUN' );
define( 'SECURE_AUTH_SALT', '.A{HMyK{V>+&0k4auY}0v.GBx;3~dpjq<P5[z}BM/<;(^yos&6H=QGJ ~rFAmbI+' );
define( 'LOGGED_IN_SALT',   ')d2k$e2z[nmFraDQn(6Z)iv%0uDx[X1Tp~8vG@xVlkHm9|=SaF6k^q2*{Xxyu(L^' );
define( 'NONCE_SALT',       'u7r6dV?QvTWZ4TmJg[ 3LmJxjp[GJ<6+]ux:USRs1WXrCh?Y=jnT+#b%uP>lrXoN' );

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
