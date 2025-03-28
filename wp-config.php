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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'education' );

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
define( 'AUTH_KEY',         'TGV()Wt:sS4`.6SoNnG7*_mqUzluk4-2)zP3Mn0{Hf9-V K/HZatU.oFUuqN3Er}' );
define( 'SECURE_AUTH_KEY',  'r/<oaC=HB76 uQOc@nd9%J+bAI;J43~F;n GbkpSH25?}aJ)apn9{YU=YQTmT?$#' );
define( 'LOGGED_IN_KEY',    'a@cb}L=E;#+`dVhh6jKELjpU~f3F*.wp]No`=-+00o(EFklzxURh1p#MF7wx~YH~' );
define( 'NONCE_KEY',        'w9>$CXQnm^l~DUb<>&)@8W*yV*($p9*SErHM&Csmr50< `#-xAd fh+HbP.v5iKq' );
define( 'AUTH_SALT',        'rWvi}:s2:[x.YIx`}PQI`DFl>_m2MV_&-DC fdzg^iA7$*/AksLUlJ@T<ClI&I)J' );
define( 'SECURE_AUTH_SALT', 'v_y}!2(eH7AzlQDPhr+^T8^z*!}o{AqdQe|#;_hqb#_J=XPAr9y{Yhr&T,{2Xcw>' );
define( 'LOGGED_IN_SALT',   '~ Iicwp#jvkx/GC@vXg[[.;#|uWKexT&v#ib_>iBifZruwJgaU|vAvz/U^kV7O?s' );
define( 'NONCE_SALT',       'T~*=|XIGCPpchRdWu1, UKnilQzx}C)YhMK1]eNK*X)?H[A7&.&h^Kg:>O5Tt+e;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
