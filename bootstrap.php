<?php
// Filesystem paths
define('ROOT_PATH',     __DIR__);
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('CONFIG_PATH',   ROOT_PATH . '/config');
define('PUBLIC_PATH',   ROOT_PATH . '/public');

// Load web URLs
require_once CONFIG_PATH . '/app.php';

// Folder name must match exactly.
define('BASE_URL',   '/Construction-Management-System/');
define('CSS_URL',    BASE_URL . 'public/css/');
define('ASSETS_URL', BASE_URL . 'public/assets/');
?>