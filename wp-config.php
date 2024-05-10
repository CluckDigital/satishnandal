<?php
@ini_set( 'upload_max_filesize' , '256M' );
/**
 * 
 * 
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9788904_ailh1' );
/** Database username */
define( 'DB_USER', 'i9788904_ailh1' );
/** Database password */
define( 'DB_PASSWORD', 'Z.KFReQpa1XapiondH715' );
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
define('AUTH_KEY',         'sfu4CJAKeZsxpYLVH7qEpze0e4EWIvXtflIJnd7ULycs2z0tTil1K2z0EaOzpoUn');
define('SECURE_AUTH_KEY',  'CHu0uWwUVIK7mFNWvSYTJTHv70pzhyg5ruwjj0hF4dEAJ3th834qN58CJdXjHEdF');
define('LOGGED_IN_KEY',    '8SV3ZNqYd36WlyJ9M9J1sTMPixZ1aQAkF1iKguIiKxEw9SSCqS7ZlDhaAbbssyg4');
define('NONCE_KEY',        'OdS3JUOQgAmJHe1u4spgSBEPMRnCxKd7XuZWNQM95dzAD2AkHTpTEW9IdMkItDvb');
define('AUTH_SALT',        '1sOFY2nGhBp1EnDbs5RF6mSSHAd5Aqsmsa95co7q0BjyPnvO2k7arNwirAdD793H');
define('SECURE_AUTH_SALT', 'frhUSpgnqJ3CbKt7dMOXHCe39cNLeQ09BDIM4QnOViUm4wTtEXsxQgmbNuNYn1VA');
define('LOGGED_IN_SALT',   '0ObP37kWBszpHhemria3bvrQbVQLEHcfaMbBmnE5gQrjwsbsVsRxcwxab94atSXL');
define('NONCE_SALT',       'AIM3qExG4T9pMkTNZyUUco5g31g1FMOQDxxVCc5YX3wgRg78Kg1vJvDF79LqljyJ');
/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cv4t_';
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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