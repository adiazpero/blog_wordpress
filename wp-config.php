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
define( 'DB_NAME', 'wordpress_curso' );

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
define( 'AUTH_KEY',         'cs]Ix:.+_S[dc Hm> VdWEs0H8=:OcVeSvfp;w(h^f/*]qIQw^7D 5^@tc:+my<%' );
define( 'SECURE_AUTH_KEY',  'Ff&<NiW`hzA_<z(8b4Q^F>(Lkoom,g*>@?) [Q..n[=a ~.}~.bM;|]Ubqt@2(Y!' );
define( 'LOGGED_IN_KEY',    't}$*616n4fO5#V1DpUZW;ssvY;PC8jY}PdG%~Pb$ufV5^<Ft<-Z><R2%.p^lk4(I' );
define( 'NONCE_KEY',        'JfzTH(9k:yx%WVV28EncLkX9_rN~JfN1YN]&Clq>RKy|D {?QJOOSYUfH6SXKk<]' );
define( 'AUTH_SALT',        'IWx)N9@EYM^;C pdNmW2&Ko|WUv(1w Nu.Gz!>]e|HAe(q.VDbi9cwC{*?Z<Yr#d' );
define( 'SECURE_AUTH_SALT', 'P>1Wx:,a#1Q)P`ygj3?jq?xsws1e:%/{h>kPYT@,>w]Rp(nu,T~9Dc2({@(!Hw0d' );
define( 'LOGGED_IN_SALT',   ' bGY]i|l.7Z/z0H^7z`!nZ]Kat(j#Bv`!h$L{%fe0f@/sWVdw<i~5ajoF!3g%~(2' );
define( 'NONCE_SALT',       'bnV-_y7aqfS_X*:@pU?kUp;V~ro|=}O&}h/t3~e**2?e4A~wmLILC(?efeaR8GJv' );

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
