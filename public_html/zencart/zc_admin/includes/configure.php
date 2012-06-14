<?php
/**
 * @package Configuration Settings circa 1.5.0
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * File Built by zc_install on 2012-03-30 05:20:58
 */


/*************** NOTE: This file is similar, but DIFFERENT from the "store" version of configure.php. ***********/
/***************       The 2 files should be kept separate and not used to overwrite each other.      ***********/

/**
 * WE RECOMMEND THAT YOU USE SSL PROTECTION FOR YOUR ENTIRE ADMIN:
 * To do that, make sure you use a "https:" URL for BOTH the HTTP_SERVER and HTTPS_SERVER entries:
 */
  define('HTTP_SERVER', 'http://zc3.ezimobile.biz');
  define('HTTPS_SERVER', 'https://zc3.ezimobile.biz');
  define('HTTP_CATALOG_SERVER', 'http://zc3.ezimobile.biz');
  define('HTTPS_CATALOG_SERVER', 'https://zc3.ezimobile.biz');

  // secure webserver for admin?  Valid choices are 'true' or 'false' (including quotes).
  define('ENABLE_SSL_ADMIN', 'false');

  // secure webserver for storefront?  Valid choices are 'true' or 'false' (including quotes).
  define('ENABLE_SSL_CATALOG', 'false');

// NOTE: be sure to leave the trailing '/' at the end of these lines if you make changes!
// * DIR_WS_* = Webserver directories (virtual/URL)
  // these paths are relative to top of your webspace ... (ie: under the public_html or httpdocs folder)
  $t1 = parse_url(HTTP_SERVER);$p1 = $t1['path'];$t2 = parse_url(HTTPS_SERVER);$p2 = $t2['path'];

  define('DIR_WS_ADMIN', preg_replace('#^' . str_replace('-', '\-', $p1) . '#', '', dirname($_SERVER['SCRIPT_NAME'])) . '/');
  define('DIR_WS_CATALOG', '/zencart/');
  define('DIR_WS_HTTPS_ADMIN', preg_replace('#^' . str_replace('-', '\-', $p2) . '#', '', dirname($_SERVER['SCRIPT_NAME'])) . '/');
  define('DIR_WS_HTTPS_CATALOG', '/zencart/');

  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'images/');
  define('DIR_WS_CATALOG_TEMPLATE', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'includes/templates/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'includes/languages/');

// * DIR_FS_* = Filesystem directories (local/physical)
  define('DIR_FS_ADMIN', realpath(dirname(__FILE__) . '/../') . '/');
  //the following path is a COMPLETE path to your Zen Cart files. eg: /var/www/vhost/accountname/public_html/store/
  define('DIR_FS_CATALOG', '/home/ezimobile/domains/zc3.ezimobile.biz/public_html/zencart/');

  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_CATALOG_TEMPLATES', DIR_FS_CATALOG . 'includes/templates/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_EMAIL_TEMPLATES', DIR_FS_CATALOG . 'email/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');

// define our database connection
  define('DB_TYPE', 'mysql');
  define('DB_PREFIX', '');
  define('DB_CHARSET', 'utf8');
  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'ezimobile');
  define('DB_SERVER_PASSWORD', 'lU2M9dPdU4cKuzy0');
  define('DB_DATABASE', 'zc3');

  // The next 2 "defines" are for SQL cache support.
  // For SQL_CACHE_METHOD, you can select from:  none, database, or file
  // If you choose "file", then you need to set the DIR_FS_SQL_CACHE to a directory where your apache 
  // or webserver user has write privileges (chmod 666 or 777). We recommend using the "cache" folder inside the Zen Cart folder
  // ie: /path/to/your/webspace/public_html/zen/cache   -- leave no trailing slash  
  define('SQL_CACHE_METHOD', 'database'); 
  define('DIR_FS_SQL_CACHE', '/home/ezimobile/domains/zc3.ezimobile.biz/public_html/zencart/cache');


// Define the webserver and path parameters
  // Main webserver: eg-http://www.your_domain.com - 
  // HTTP_SERVER is your Main webserver: eg-http://www.your_domain.com
  // HTTPS_SERVER is your Secure webserver: eg-https://www.your_domain.com
  // HTTP_CATALOG_SERVER is your Main webserver: eg-http://www.your_domain.com
  // HTTPS_CATALOG_SERVER is your Secure webserver: eg-https://www.your_domain.com
  /* 
   * URLs for your site will be built via:  
   *     HTTP_SERVER plus DIR_WS_ADMIN or
   *     HTTPS_SERVER plus DIR_WS_HTTPS_ADMIN or 
   *     HTTP_SERVER plus DIR_WS_CATALOG or 
   *     HTTPS_SERVER plus DIR_WS_HTTPS_CATALOG
   * ...depending on your system configuration settings
   */
// EOF