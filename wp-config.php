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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'T#^#?kHRZn30R=$26/@uX~HAU}#=RhE:a<,9D/(<aN#ZyW$9+80j!.rEANI`0I3T' );
define( 'SECURE_AUTH_KEY',  'NRcFkKS~{45,):nGNUn*l> *<r9$=Xp;rM:=11Lfs}SI_)Z}tUmUx7P]t)Y9o{1k' );
define( 'LOGGED_IN_KEY',    '.f}FjU#fd>3hyQ[Q5 I^ep||F_Pc$[;u|_?erPg3cvloLG~Vy,YT#k35^11B4&%]' );
define( 'NONCE_KEY',        '/>{Li73#SiG|1:D{3/L{#5;dYfALFO0C$qyaqeuT@ixnzQAH-M>=`+,$/2@{rmZb' );
define( 'AUTH_SALT',        '4XigyQiNoH{s{pEdsK7j-D0 m^%-13EZ] 5zIHsyB`&6kZ{Ay z&.fU`P8#8q5->' );
define( 'SECURE_AUTH_SALT', 'jbok(J@~RFT#K&%&.j^#>mn*9fSfP#j%hn >%|qeC4SE@o5|q#oQ#DbI 1lP][sc' );
define( 'LOGGED_IN_SALT',   'TA`0&Bk;Kl@@9Myo>K[wsn-@.u jeXSM$Z3F$ix74$HG)H%g[p~,m/AIG/Jv}b+c' );
define( 'NONCE_SALT',       'XHS1p.z~?:uhRCG|1c_pp}A_rp<WO>n# YF@YJ4<77FU(xJ&&eRbQ:iA2R=E=#0:' );

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
