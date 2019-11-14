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
define( 'DB_NAME', '{{ DB_NAME }}' );

/** MySQL database username */
define( 'DB_USER', '{{ DB_USER }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ DB_PASS }}' );

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
define( 'AUTH_KEY',         'L~GoL?)Eetd,S4K4dC-S;l6($*Z YD5C]B/zn>$%/750.*`s,)qR9-r#CF6B9Xc)' );
define( 'SECURE_AUTH_KEY',  'KG5iSV#pxRLRM?D~93*f{TN17=/nJ7y>z)l!jG/eN5$I`;q@snNWS.)R:o|&,?=]' );
define( 'LOGGED_IN_KEY',    'm3Wc >rl^@}6[9vM/X+V{uAHB=Rl|4btLZWzj~MZvep!-SrjQ{:4n+#OiY-Io)m?' );
define( 'NONCE_KEY',        'i5X0TudsDn{r@n,[3priXLh.+3m)kYH>)Ptb*?zxD|QcE==vd@P`+4A<cd pla>-' );
define( 'AUTH_SALT',        'I%qvZ<?~,;mDQE8y4D5.d,rzy|ToA]8y@JJ2F#RFvAS2sV`jbx[^z&^w&aCcgzb&' );
define( 'SECURE_AUTH_SALT', 'UP3gdGx?O;5Aj=UoQ:!%DTJ~l@|6;y>qJaRuNbxs>R,+tLbT~]#c+%vs3C}~!{,^' );
define( 'LOGGED_IN_SALT',   'r.<N^UauX^$])6i=NjCj}kvR`VbC{_!AZT-zX^*/.kI q~d%UY_r4:J=y7n,]l%_' );
define( 'NONCE_SALT',       '#3o(#}:JN*l|2X-O%DF3YK<8y1#oex@fw`#`HKdiIbY$po._4D_FdM/]-_#>It$3' );

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
