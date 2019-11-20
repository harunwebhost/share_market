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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'market_winner' );

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
define( 'AUTH_KEY',         'JZXI Mwv{msEOxE1P?a+dFd,XMftLcf=^!$X(^-/hgj 1-N&6joKS?AGpiGu.Po?' );
define( 'SECURE_AUTH_KEY',  '{bCm?=>m-uiF}`QMu><A_9[HkY0Bw2R5>Epo[8+UPb=;mU)%%2lm{,j}||Sq]kon' );
define( 'LOGGED_IN_KEY',    '3Am0l|+.IDN~6=Q3[5CwMY=RRpI;=2N*:$9YP})pwZ3G4-i@f@c<juV.Xj%y8VlW' );
define( 'NONCE_KEY',        ',eu!RKY]T-=9]JKn6$kN)ON6,,6]}2S)NStr}Szo#P*z2Rg u]iA3rs2nvKy?P=@' );
define( 'AUTH_SALT',        'qyi!fZ)J|7dEF*SXE^_GlXCJl73$nb?vVQP(@TUe(5=k7qxm5#eL9.21eKxB3[tq' );
define( 'SECURE_AUTH_SALT', 'dQE%X!2@/]}fAHwOBrisZ>W?4{B`X!L-e~ )BO8rry13tNgRw9YZ9t?9.TE.g:v/' );
define( 'LOGGED_IN_SALT',   'Xdo),/;Pqy,.4oP.q[GHhv- o0!Y~RI2|.B7!og`x/5FcZDE**^`Yz(i6{WG0k/{' );
define( 'NONCE_SALT',       'Oz!P)=ZH*Oah1J}Q5>p8CXX=qu7D6h;j!2 vr+S}BVWD!fHStJO{`X@57nOJ:sB7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
