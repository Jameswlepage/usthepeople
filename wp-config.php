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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'twofivm3_045' );

/** MySQL database username */
define( 'DB_USER', 'twofivm3_045' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EDAF946a7gde2jw3r0i1l8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OaaF`dNZt-@YX!2HWtN Oqs9deg?{&I71|e4)aK|)bPP_pkCXeO%Ap/e!u?R&u&!');
define('SECURE_AUTH_KEY',  '<69NUO= ,BdL[ WOc>NN>gs*L<76D ML4}}gBik56W_$(8hvoGS;Nu+`1|jk+04M');
define('LOGGED_IN_KEY',    'Y-#[Alj=n:45XMkuuH<P%U_:D~.A}@OP8?hKN:F_};6LiCXb+gw!/x[c E%^6KC[');
define('NONCE_KEY',        '20-k*YEf7i4513j([`e/tY1a1+a2z2xXfUjpIbp~Vk:37L0p-Rf*_[a{|0axx`*|');
define('AUTH_SALT',        'B>_CqCssr)LtP&:wi6`bT:!<A0+c8Izu4?w6Y},:TKBD(gbaV D9*D}e63tW|4W,');
define('SECURE_AUTH_SALT', ']Tap/@4U3mI3YB0nN:!_~J:%<hOpy~~9/@n)%IDWjGntJwffI:m&mJ_v^^*&ADB]');
define('LOGGED_IN_SALT',   'HXFYh(uC&YvG^ZoT1,a]0DlO X8]C#s:mheqy+DvgsixbQ1jk.2VH|*m%++oR`|w');
define('NONCE_SALT',       ':K[+2]x|ryqjTsQ@{e`$UYJzvWw~C*:#45M+Hd%zCL4bMT6T]6xQX5N++ds:(+vl');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '045_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
