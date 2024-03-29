<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/PCtest/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/PCtest/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/PCtest/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/PCtest/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/PCtest/image/');
define('DIR_STORAGE', 'C:/xampp/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'shop');
define('DB_PORT', '3307');
define('DB_PREFIX', 'oc_');