<?php
if(!defined('ROOT')) define('ROOT', dirname(__DIR__));
if(!defined('WWW')) define('WWW', ROOT, '/public');
if(!defined('APP')) define('APP', ROOT, '/app');
if(!defined('CORE')) define('CORE', ROOT, '/resources');
if(!defined('CACHE')) define('CACHE', ROOT, '/tmp/cache');
if(!defined('CONF')) define('CONF', ROOT, '/config');

    $host = false;
    if(isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }
    $allowed_host = 'http://news/index.php';

    $app_path = preg_replace("#[^/]+$#", '', $allowed_host);
    $app_path = preg_replace('/public/', '', $app_path);

if(!defined('PATH')) define('PATH', $app_path );
if(!defined('ADMIN')) define('ADMIN', PATH . 'admin/index' );
