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
define('DB_NAME', 'fighter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|.9|vjb0vE$A~[2]A[9!X=<P?CKmrf3g:r-(3:F_@ad:^a K3G>]vCH{#a|ri{- ');
define('SECURE_AUTH_KEY',  'q|;Hwx BpzQYWnscv?l)~J x-`PB)9IQv+WH9|pfq^*,$AIwFtbrT;ok4Or/j3._');
define('LOGGED_IN_KEY',    '$N_}EXX*bq4;M*TE{c^xK<-C/hHbXcHX Y]|2O?Ml2357*!|:VP;L]tbms6#ky4S');
define('NONCE_KEY',        'H`KTcy/p2pA$fRHA+Dmtg=(;hifeRyEnu<0)=}R9QNY7jAy4Vm%rD,P:Re!E7g)T');
define('AUTH_SALT',        'DnnA1D%}MS f?*#b:e,N7j)dIx_UTVPgfS/|*3>29gf)feZvK`HlLvdS5x(1M?Y1');
define('SECURE_AUTH_SALT', 'ZQU<u%zG3=!6+.`yn/0=GK4]wlt`=KNII9#TYX^N+k=ulu]@$ddl<K;qZ2;;XlvY');
define('LOGGED_IN_SALT',   'U}A?1+1E7Y`nNQg(-!3}qHMIJ/Q)c85jSEPj{yreEE2t^6cqJ0M@t><8oVZ`Msw0');
define('NONCE_SALT',       '}fn=p:/;3(sRRy@ yWA~)]6x@bys7R_ZiZVsq#>!+29;a/=W=*}&iQkC{`&J-+hX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
