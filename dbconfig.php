<?php
define('DB_SERVER', '192.168.56.109');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', 'root@123');
define ('DB_DATABASE', 'inventory');
$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>

