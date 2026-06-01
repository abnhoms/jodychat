<?php
// base system prefix
define('BOOM_PREFIX', 'localhost_chat2_');

// optional base domain
define('BOOM_DOMAIN', 'http://localhost:8080/chat2/');

// default redis configuration
define('REDIS_IP', '127.0.0.1');
define('REDIS_PORT', 6379);
define('REDIS_TIMEOUT', 0.2);
define('REDIS_PASS', '');

// you can edit these lines to configure new setting for your chat
define('BOOM_DHOST', 'localhost');
define('BOOM_DUSER', 'root');
define('BOOM_DPASS', '12312312');
define('BOOM_DNAME', 'chat2');

// base system main path do not modify
define('BOOM_PATH', dirname(__DIR__));

// do not modify those variables
define('BOOM_CRYPT', '9HaNEc705b70Ubf-49dR2793589a-fc8-bf9daTb9');
define('BOOM_INSTALL', 1);
define('BOOM', 1);
?>