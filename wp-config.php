<?php
// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('TECHCAMPS_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('TECHCAMPS_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('TECHCAMPS_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('TECHCAMPS_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Security keys  */
define('AUTH_KEY',          getenv('TECHCAMPS_AUTH_KEY'));
define('SECURE_AUTH_KEY',   getenv('TECHCAMPS_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',     getenv('TECHCAMPS_LOGGED_IN_KEY'));
define('NONCE_KEY',         getenv('TECHCAMPS_NONCE_KEY'));
define('AUTH_SALT',         getenv('TECHCAMPS_AUTH_SALT'));
define('SECURE_AUTH_SALT',  getenv('TECHCAMPS_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',    getenv('TECHCAMPS_LOGGED_IN_SALT'));
define('NONCE_SALT',        getenv('TECHCAMPS_NONCE_SALT'));


/** AWS S3 Uploads directory **/
if ( isset( $_SERVER['TECHCAMPS_S3_UPLOADS_BUCKET'] ) ) {
  define('S3_UPLOADS_BUCKET', getenv('TECHCAMPS_S3_UPLOADS_BUCKET'));
}
if ( isset( $_SERVER['TECHCAMPS_S3_UPLOADS_KEY'] ) ) {
  define('S3_UPLOADS_KEY', getenv('TECHCAMPS_S3_UPLOADS_KEY'));
}
if ( isset( $_SERVER['TECHCAMPS_S3_UPLOADS_SECRET'] ) ) {
  define('S3_UPLOADS_SECRET', getenv('TECHCAMPS_S3_UPLOADS_SECRET'));
}
if ( isset( $_SERVER['TECHCAMPS_S3_UPLOADS_REGION'] ) ) {
  define('S3_UPLOADS_REGION', getenv('TECHCAMPS_S3_UPLOADS_REGION'));
}
if ( isset( $_SERVER['TECHCAMPS_S3_UPLOADS_BUCKET_URL'] ) ) {
  define('S3_UPLOADS_BUCKET_URL', getenv('TECHCAMPS_S3_UPLOADS_BUCKET_URL'));
}

$table_prefix = 'wp_';

define( 'JETPACK_DEV_DEBUG', false );
define( 'WP_DEBUG', false );
define( 'FORCE_SSL_ADMIN', false );
define( 'SAVEQUERIES', false );

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    define('WP_CONTENT_URL', 'https://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('WP_SITEURL', 'https://' . $_SERVER['SERVER_NAME'] . '/');
    define('WP_HOME', 'https://' . $_SERVER['SERVER_NAME']);
        $_SERVER['HTTPS']='on';
} else {
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/');
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
}

/* Multisite */

define( 'WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', getenv('TECHCAMPS_DOMAIN_CURRENT_SITE'));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('SUNRISE', 'on'); // wordpress-mu-domain-mapping activation*/

define('WP_DEFAULT_THEME', 'corona');

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');