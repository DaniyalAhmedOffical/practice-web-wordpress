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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'xI+9T2I3dZYby1oKcWEEnNomesBgPofNHbikF7L/BpjNjZlL00LXlompkQlNt4ruPWWIjAh30OBjh6rxhdbekA==');
define('SECURE_AUTH_KEY',  'y+Q7ktnZ0kq9Lb+rITc2BoVcwSjx7Xq2j0epnNBamCSQxcscidnKZRGZJgKzNN+yfPrDho0ZAohYGFW+o3hDCg==');
define('LOGGED_IN_KEY',    'JB/NXRF200WKCxc9q20UXJE4/zouYydga41eaemxMfRI6p4tLJQhoy+gkOoBybczw2o1toFqTJeEXKkqRbJajg==');
define('NONCE_KEY',        'IG8+2ivmuOgC7Bzovs2Ct+x1LMtf0grrZy9h/mv0AgvbluWtpMs7jHF0hGlCClDIfTgqtPbDhoQ5FSpIBPKHyQ==');
define('AUTH_SALT',        'XRsY26aXVwlnV9VyzhAGpzks8IpTKl7RfqXqVxfQPqLn+QyPmPlUIYkqkgxuS9LSQ7zW2ry4YE3ZDJAEjvbOfA==');
define('SECURE_AUTH_SALT', 'RKbB6uxgMt9rASS2HUxJTon+/2rxV37KdiNp99Gg5oiYBh4KMftn7tDisRRQu4PyGAAqAn+G0Lq8UHt4RERf+w==');
define('LOGGED_IN_SALT',   'sJLEdnfvjSTiFvAsdcihOqj9ko6/J88VGrsROBjIfDyepV5PMAjUEBf8J68c998XiHwk/6pcdn1JO01PlzVkgA==');
define('NONCE_SALT',       'SYiaMyDKKoxUazIq6oFtPNcqRlZSXHINnrDwCnD27+t/VxAVYGPKZPm7IcRBmo9DwRzaO0YMl44fQ4NDfeMgEA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
