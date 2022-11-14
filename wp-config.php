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
define( 'DB_NAME', 'cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Covid19#21' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '{Wwm/4`,fA[9F@ig7]t~BsU-HH;JR z{b]S.u@m9/yPAU&YB)oJ|1Li%D;vc2!Kh' );
define( 'SECURE_AUTH_KEY',  'e?` &5=UESk #So+s[(I1|4*(`7VE*YwbOUjo%AURjwMk9)Z{&/>~Lg|.Iz#;,C:' );
define( 'LOGGED_IN_KEY',    'l_{whK:C1$-xD(-L-``1E9L<MWCYN&qHMUo>p`7=HrOSsRzP?D~)5iT;AMhiFjZ6' );
define( 'NONCE_KEY',        'yYR% eHzUYO>[633DG:Q^eyH~tKRQ5BgEO@ym}O ~LuP(ePDSZE]d]q^Q>b_OX)&' );
define( 'AUTH_SALT',        '!:p@3$r8s74AA_`or2_8oZJ@CZ33&Al*vL*EE]@ljeF{&nq1Y%>;9UvyJO%A^7o6' );
define( 'SECURE_AUTH_SALT', 'U2%%=v ,7^[//k)f%6|Ip`E=9M<^W/Yp#w;9&Fqb|F4TR#+}e,.K?m54f#qH,<lt' );
define( 'LOGGED_IN_SALT',   '?qiz~Z=kD%aJc{ :gQ!#^6I|TF14}K|+ d8aRif}..n]8^A]ASSX)i$YO&yi}v|v' );
define( 'NONCE_SALT',       '`vZ&@k!^vl2hk!T~$F3LRd{{qs7:::=A|2D0Bjo]d8s!.k;?mP$ 7<7d~@`;@b9g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cms_';

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
